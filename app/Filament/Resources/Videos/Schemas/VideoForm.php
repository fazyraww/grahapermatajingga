<?php

namespace App\Filament\Resources\Videos\Schemas;

use Filament\Schemas\Schema;

class VideoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('title')
                    ->required(),
                \Filament\Forms\Components\TextInput::make('url')
                    ->required()
                    ->helperText('TikTok: paste link video spesifik, contoh: https://www.tiktok.com/@grahapj.situbondo/video/1234567890. YouTube: paste link video biasa.'),
                \Filament\Forms\Components\Select::make('type')
                    ->options([
                        'tiktok' => 'TikTok',
                        'youtube' => 'YouTube',
                    ])
                    ->default('tiktok')
                    ->required(),
                \Filament\Forms\Components\TextInput::make('order')
                    ->numeric()
                    ->default(0),
                \Filament\Forms\Components\Toggle::make('is_active')
                    ->default(true),
            ]);
    }
}
