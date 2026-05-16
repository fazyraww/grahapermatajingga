<?php

namespace App\Filament\Resources\Popups\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PopupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns([
                'default' => 1,
                'lg' => 3,
            ])
            ->components([
                Section::make('Identitas Popup')
                    ->description('Nama internal dan link tujuan saat popup diklik.')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Popup')
                            ->required()
                            ->maxLength(255)
                            ->default('Promo Popup'),
                        TextInput::make('link')
                            ->label('Link WhatsApp / Booking')
                            ->url()
                            ->maxLength(255)
                            ->placeholder('https://wa.me/628...')
                            ->helperText('Opsional. Kosongkan jika popup hanya berupa informasi.'),
                        Toggle::make('is_active')
                            ->label('Aktifkan Popup')
                            ->helperText('Hanya popup aktif yang akan muncul di beranda.')
                            ->default(true)
                            ->onColor('success')
                            ->offColor('gray'),
                    ])
                    ->columnSpan([
                        'default' => 'full',
                        'lg' => 1,
                    ]),

                Section::make('Gambar Popup')
                    ->description('Siapkan versi desktop dan mobile agar popup tetap proporsional di semua layar.')
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->imageEditor()
                            ->imagePreviewHeight('190')
                            ->maxSize(4096)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->disk('public')
                            ->directory('popups')
                            ->label('Foto Popup Desktop'),
                        FileUpload::make('image_mobile')
                            ->image()
                            ->imageEditor()
                            ->imagePreviewHeight('190')
                            ->maxSize(4096)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->disk('public')
                            ->directory('popups')
                            ->label('Foto Popup Mobile'),
                    ])
                    ->columns(2)
                    ->columnSpan([
                        'default' => 'full',
                        'lg' => 2,
                    ]),
            ]);
    }
}
