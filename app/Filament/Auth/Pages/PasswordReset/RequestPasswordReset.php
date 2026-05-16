<?php

namespace App\Filament\Auth\Pages\PasswordReset;

use App\Notifications\PasswordResetCode;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use Filament\Actions\Action;
use Filament\Auth\Pages\PasswordReset\RequestPasswordReset as BaseRequestPasswordReset;
use Filament\Facades\Filament;
use Filament\Forms\Components\TextInput;
use Filament\Models\Contracts\FilamentUser;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password as PasswordRule;

class RequestPasswordReset extends BaseRequestPasswordReset
{
    public bool $codeSent = false;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                $this->getEmailFormComponent(),
                $this->getCodeFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getPasswordConfirmationFormComponent(),
            ]);
    }

    public function request(): void
    {
        if ($this->codeSent) {
            $this->resetPasswordWithCode();

            return;
        }

        $this->sendResetCode();
    }

    protected function sendResetCode(): void
    {
        try {
            $this->rateLimit(2, method: 'sendResetCode');
        } catch (TooManyRequestsException $exception) {
            $this->getRateLimitedNotification($exception)?->send();

            return;
        }

        $data = $this->form->getState();
        $email = trim((string) ($data['email'] ?? ''));

        /** @var CanResetPassword | Authenticatable | Model | null $user */
        $user = Password::broker(Filament::getAuthPasswordBroker())->getUser([
            'email' => $email,
        ]);

        if (! $user) {
            $this->getFailureNotification(Password::INVALID_USER)?->send();

            return;
        }

        if (
            ($user instanceof FilamentUser) &&
            (! $user->canAccessPanel(Filament::getCurrentOrDefaultPanel()))
        ) {
            Notification::make()
                ->title('Akun ini belum punya akses admin.')
                ->body('Pastikan akun sudah dibuat di menu Admin User dan opsi akses admin sudah aktif.')
                ->danger()
                ->send();

            return;
        }

        $code = (string) random_int(100000, 999999);

        $this->storeResetCode($user, $code);
        $user->notify(new PasswordResetCode($code, $this->getResetCodeExpiryMinutes()));

        $this->codeSent = true;

        $this->form->fill([
            'email' => $email,
            'code' => '',
            'password' => '',
            'passwordConfirmation' => '',
        ]);

        Notification::make()
            ->title('Kode reset sudah dikirim.')
            ->body('Cek email tersebut, lalu masukkan kode 6 digit dan password baru.')
            ->success()
            ->send();
    }

    protected function resetPasswordWithCode(): void
    {
        try {
            $this->rateLimit(3, method: 'resetPasswordWithCode');
        } catch (TooManyRequestsException $exception) {
            $this->getRateLimitedNotification($exception)?->send();

            return;
        }

        $data = $this->form->getState();
        $code = preg_replace('/\D/', '', (string) ($data['code'] ?? ''));
        $hasPanelAccess = true;

        $status = Password::broker(Filament::getAuthPasswordBroker())->reset(
            [
                'email' => trim((string) ($data['email'] ?? '')),
                'token' => $code,
                'password' => $data['password'],
            ],
            function (CanResetPassword | Model | Authenticatable $user, string $password) use (&$hasPanelAccess): void {
                if (
                    ($user instanceof FilamentUser) &&
                    (! $user->canAccessPanel(Filament::getCurrentOrDefaultPanel()))
                ) {
                    $hasPanelAccess = false;

                    return;
                }

                $user->forceFill([
                    $user->getAuthPasswordName() => Hash::make($password),
                    $user->getRememberTokenName() => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            },
        );

        if ($hasPanelAccess === false) {
            $status = Password::INVALID_USER;
        }

        if ($status !== Password::PASSWORD_RESET) {
            Notification::make()
                ->title(__($status))
                ->danger()
                ->send();

            return;
        }

        Notification::make()
            ->title('Password berhasil diubah.')
            ->body('Silakan login memakai password baru.')
            ->success()
            ->send();

        $this->redirect(filament()->getLoginUrl());
    }

    protected function getEmailFormComponent(): Component
    {
        return TextInput::make('email')
            ->label('Email address')
            ->email()
            ->required()
            ->autocomplete()
            ->autofocus();
    }

    protected function getCodeFormComponent(): Component
    {
        return TextInput::make('code')
            ->label('Kode dari email')
            ->required(fn (): bool => $this->codeSent)
            ->rule('digits:6')
            ->validationAttribute('kode reset')
            ->extraInputAttributes([
                'autocomplete' => 'one-time-code',
                'inputmode' => 'numeric',
                'maxlength' => 6,
            ])
            ->visible(fn (): bool => $this->codeSent);
    }

    protected function getPasswordFormComponent(): Component
    {
        return TextInput::make('password')
            ->label('Password baru')
            ->password()
            ->autocomplete('new-password')
            ->revealable(filament()->arePasswordsRevealable())
            ->required(fn (): bool => $this->codeSent)
            ->rule(PasswordRule::default())
            ->same('passwordConfirmation')
            ->validationAttribute('password baru')
            ->visible(fn (): bool => $this->codeSent);
    }

    protected function getPasswordConfirmationFormComponent(): Component
    {
        return TextInput::make('passwordConfirmation')
            ->label('Konfirmasi password baru')
            ->password()
            ->autocomplete('new-password')
            ->revealable(filament()->arePasswordsRevealable())
            ->required(fn (): bool => $this->codeSent)
            ->dehydrated(false)
            ->visible(fn (): bool => $this->codeSent);
    }

    protected function getRequestFormAction(): Action
    {
        return Action::make('request')
            ->label(fn (): string => $this->codeSent ? 'Reset password' : 'Kirim kode reset')
            ->submit('request');
    }

    protected function storeResetCode(CanResetPassword $user, string $code): void
    {
        $broker = Filament::getAuthPasswordBroker() ?? config('auth.defaults.passwords');
        $config = config("auth.passwords.{$broker}");
        $connection = $config['connection'] ?? null;
        $table = $config['table'] ?? 'password_reset_tokens';

        DB::connection($connection)
            ->table($table)
            ->updateOrInsert(
                ['email' => $user->getEmailForPasswordReset()],
                [
                    'token' => Hash::make($code),
                    'created_at' => now(),
                ],
            );
    }

    protected function getResetCodeExpiryMinutes(): int
    {
        $broker = Filament::getAuthPasswordBroker() ?? config('auth.defaults.passwords');

        return (int) config("auth.passwords.{$broker}.expire", 60);
    }

    public function getHeading(): string
    {
        return $this->codeSent ? 'Masukkan kode reset' : 'Lupa password';
    }
}
