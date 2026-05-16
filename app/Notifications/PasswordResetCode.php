<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PasswordResetCode extends Notification
{
    use Queueable;

    public function __construct(
        protected string $code,
        protected int $expiresInMinutes,
    ) {}

    /**
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Kode reset password Graha Permata Jingga')
            ->greeting('Halo ' . ($notifiable->name ?? 'Admin'))
            ->line('Gunakan kode berikut untuk membuat password baru:')
            ->line($this->code)
            ->line("Kode ini berlaku {$this->expiresInMinutes} menit.")
            ->line('Jika Anda tidak meminta reset password, abaikan email ini.');
    }
}
