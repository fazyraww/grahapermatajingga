<?php

namespace App\Filament\Resources\Videos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class VideoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns([
                'default' => 1,
                'lg' => 3,
            ])
            ->components([
                Section::make('Konten Video')
                    ->description('Masukkan link video publik dari TikTok atau YouTube.')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul Video')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('url')
                            ->label('URL Video')
                            ->url()
                            ->required()
                            ->maxLength(255)
                            ->helperText('TikTok: paste link video spesifik. YouTube: paste link video biasa.'),
                    ])
                    ->columnSpan([
                        'default' => 'full',
                        'lg' => 2,
                    ]),

                Section::make('Pengaturan')
                    ->description('Jenis video, urutan, dan status tampil.')
                    ->schema([
                        Select::make('type')
                            ->label('Platform')
                            ->options([
                                'tiktok' => 'TikTok',
                                'youtube' => 'YouTube',
                            ])
                            ->native(false)
                            ->default('tiktok')
                            ->required(),
                        TextInput::make('order')
                            ->label('Urutan')
                            ->numeric()
                            ->minValue(0)
                            ->default(0),
                        Toggle::make('is_active')
                            ->label('Tampilkan di Website')
                            ->default(true)
                            ->onColor('success')
                            ->offColor('gray'),
                    ])
                    ->columnSpan([
                        'default' => 'full',
                        'lg' => 1,
                    ]),
            ]);
    }
}
