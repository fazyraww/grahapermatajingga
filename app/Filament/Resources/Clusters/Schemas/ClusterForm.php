<?php

namespace App\Filament\Resources\Clusters\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ClusterForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('subtitle')
                    ->label('Sub-Judul (Misal: *Untuk 5 Unit Pertama)'),
                TextInput::make('badge_text')
                    ->label('Teks Badge (Misal: PREMIUM UNIT)'),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),
                Textarea::make('description')
                    ->label('Deskripsi Pendek')
                    ->columnSpanFull(),
                TextInput::make('bedrooms')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('bathrooms')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('building_area'),
                TextInput::make('land_area'),
                TagsInput::make('features')->placeholder('Tekan enter untuk menambah (misal: Ruang Tamu, Carport)')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('clusters')
                    ->label('Foto Utama'),
                FileUpload::make('denah_image')
                    ->image()
                    ->multiple()
                    ->reorderable()
                    ->maxFiles(5)
                    ->disk('public')
                    ->directory('clusters')
                    ->label('Foto Denah Rumah (Bisa upload lebih dari 1)'),
                KeyValue::make('specifications')
                    ->label('Spesifikasi Unit (Pondasi, Dinding, dll)')
                    ->keyLabel('Nama Spesifikasi')
                    ->valueLabel('Detail / Spesifikasi')
                    ->default([
                        'Luas Unit' => '',
                        'Pondasi' => '',
                        'Dinding' => '',
                        'Lantai' => '',
                        'Rangka Atap' => '',
                        'Genteng' => '',
                        'Kusen' => '',
                        'Sanitair' => '',
                        'Listrik' => '',
                        'Air' => '',
                    ])
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}

