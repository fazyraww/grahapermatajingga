<?php

namespace App\Filament\Resources\Facilities\Schemas;

use Filament\Schemas\Schema;

class FacilityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('title')
                    ->required(),
                \Filament\Forms\Components\TextInput::make('icon')
                    ->helperText('Contoh: fas fa-home')
                    ->default('fas fa-check-circle'),
                \Filament\Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                \Filament\Forms\Components\FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('facilities'),
                \Filament\Forms\Components\TextInput::make('order')
                    ->numeric()
                    ->default(0),
                \Filament\Forms\Components\Toggle::make('is_active')
                    ->default(true),
            ]);
    }
}
