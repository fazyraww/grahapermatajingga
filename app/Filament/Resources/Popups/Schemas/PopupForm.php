<?php

namespace App\Filament\Resources\Popups\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PopupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->default('Promo Popup'),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('popups')
                    ->label('Foto Popup (Desktop)'),
                FileUpload::make('image_mobile')
                    ->image()
                    ->disk('public')
                    ->directory('popups')
                    ->label('Foto Popup (Mobile)'),
                TextInput::make('link')
                    ->label('Link WhatsApp / Booking (Opsional)')
                    ->placeholder('https://wa.me/...'),
                Toggle::make('is_active')
                    ->label('Aktifkan Popup')
                    ->default(true),
            ]);
    }
}
