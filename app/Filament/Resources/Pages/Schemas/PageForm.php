<?php

namespace App\Filament\Resources\Pages\Schemas;

use Filament\Schemas\Schema;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, $set) => $set('slug', \Illuminate\Support\Str::slug($state))),
                \Filament\Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
                \Filament\Forms\Components\RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                \Filament\Forms\Components\FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('pages'),
                \Filament\Forms\Components\Textarea::make('google_maps')
                    ->label('Google Maps Iframe')
                    ->helperText('Paste kode iframe dari Google Maps di sini (khusus halaman Lokasi)')
                    ->visible(fn ($get) => $get('slug') === 'lokasi'),

                \Filament\Schemas\Components\Section::make('Slider Utama (Khusus Beranda)')
                    ->visible(fn ($get) => $get('slug') === 'beranda')
                    ->schema([
                        \Filament\Forms\Components\Repeater::make('extra_data.hero_sliders')
                            ->label('Slider / Banner')
                            ->schema([
                                \Filament\Forms\Components\FileUpload::make('image')
                                    ->label('Gambar Background')
                                    ->image()
                                    ->disk('public')
                                    ->directory('pages/hero')
                                    ->required(),
                                \Filament\Forms\Components\TextInput::make('subtitle')
                                    ->label('Teks Kecil Atas (misal: Selamat Datang Di)'),
                                \Filament\Forms\Components\TextInput::make('title')
                                    ->label('Judul Besar (misal: Graha Permata Jingga)')
                                    ->required(),
                                \Filament\Forms\Components\TextInput::make('description')
                                    ->label('Teks Bawah (misal: Harmoni Hunian Mewah dan Asri)'),
                            ])
                            ->columns(1)
                            ->defaultItems(3)
                            ->reorderable(true),
                    ]),

                \Filament\Schemas\Components\Section::make('Download Brosur (Khusus Beranda)')
                    ->visible(fn ($get) => $get('slug') === 'beranda')
                    ->schema([
                        \Filament\Forms\Components\TextInput::make('extra_data.brochure_text')
                            ->label('Judul Penawaran')
                            ->default('DAPATKAN PENAWARAN EKSKLUSIF DARI KAMI'),
                        \Filament\Forms\Components\FileUpload::make('extra_data.brochure_file')
                            ->label('File Brosur (PDF/Gambar)')
                            ->acceptedFileTypes(['application/pdf', 'image/jpeg', 'image/png'])
                            ->disk('public')
                            ->directory('pages/brochure'),
                    ]),

                \Filament\Forms\Components\Repeater::make('extra_data.stats')
                    ->label('Statistik / Highlight (Khusus Beranda)')
                    ->schema([
                        \Filament\Forms\Components\TextInput::make('value')
                            ->label('Angka (misal: 10)')
                            ->required(),
                        \Filament\Forms\Components\TextInput::make('suffix')
                            ->label('Akhiran (misal: + Ha)'),
                        \Filament\Forms\Components\TextInput::make('label')
                            ->label('Label (misal: Total Kawasan)')
                            ->required(),
                    ])
                    ->columns(3)
                    ->visible(fn ($get) => $get('slug') === 'beranda')
                    ->columnSpanFull(),
                \Filament\Forms\Components\TextInput::make('meta_title'),
                \Filament\Forms\Components\Textarea::make('meta_description'),
            ]);
    }
}
