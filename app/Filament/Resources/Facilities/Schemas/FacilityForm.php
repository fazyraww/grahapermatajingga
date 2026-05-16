<?php

namespace App\Filament\Resources\Facilities\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class FacilityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns([
                'default' => 1,
                'lg' => 3,
            ])
            ->components([
                Section::make('Detail Fasilitas')
                    ->description('Konten fasilitas yang akan tampil di halaman fasilitas.')
                    ->schema([
                        TextInput::make('title')
                            ->label('Nama Fasilitas')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('icon')
                            ->label('Icon FontAwesome')
                            ->helperText('Contoh: fas fa-home, fas fa-tree, fas fa-shield-alt.')
                            ->default('fas fa-check-circle')
                            ->maxLength(255),
                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->rows(5)
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->columnSpan([
                        'default' => 'full',
                        'lg' => 2,
                    ]),

                Section::make('Publikasi')
                    ->description('Atur gambar, urutan tampil, dan status aktif.')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Foto Fasilitas')
                            ->image()
                            ->imageEditor()
                            ->imagePreviewHeight('170')
                            ->maxSize(4096)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->disk('public')
                            ->directory('facilities'),
                        TextInput::make('order')
                            ->label('Urutan')
                            ->numeric()
                            ->minValue(0)
                            ->default(0),
                        Toggle::make('is_active')
                            ->label('Tampilkan di Website')
                            ->helperText('Matikan jika fasilitas belum siap ditampilkan.')
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
