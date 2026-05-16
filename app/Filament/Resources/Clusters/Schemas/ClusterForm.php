<?php

namespace App\Filament\Resources\Clusters\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ClusterForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns([
                'default' => 1,
                'xl' => 3,
            ])
            ->components([
                Tabs::make('Data Unit')
                    ->tabs([
                        Tab::make('Informasi Utama')
                            ->schema([
                                Section::make('Identitas Unit')
                                    ->description('Data dasar yang akan tampil pada kartu produk.')
                                    ->schema([
                                        Select::make('category_id')
                                            ->label('Kategori')
                                            ->relationship('category', 'name')
                                            ->searchable()
                                            ->required(),
                                        TextInput::make('name')
                                            ->label('Nama Unit')
                                            ->required()
                                            ->maxLength(255)
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(fn (string $operation, $state, $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),
                                        TextInput::make('slug')
                                            ->required()
                                            ->maxLength(255)
                                            ->unique(ignoreRecord: true),
                                        TextInput::make('subtitle')
                                            ->label('Sub-Judul')
                                            ->placeholder('*Untuk 5 Unit Pertama')
                                            ->maxLength(255),
                                        TextInput::make('badge_text')
                                            ->label('Teks Badge')
                                            ->placeholder('PREMIUM UNIT')
                                            ->maxLength(255),
                                        TextInput::make('price')
                                            ->label('Harga')
                                            ->required()
                                            ->numeric()
                                            ->minValue(0)
                                            ->prefix('Rp'),
                                        Textarea::make('description')
                                            ->label('Deskripsi Pendek')
                                            ->rows(5)
                                            ->columnSpanFull(),
                                    ])
                                    ->columns(2),
                            ]),

                        Tab::make('Ukuran dan Fitur')
                            ->schema([
                                Section::make('Detail Bangunan')
                                    ->description('Isi angka dan ukuran yang mudah dibaca calon pembeli.')
                                    ->schema([
                                        TextInput::make('bedrooms')
                                            ->label('Kamar Tidur')
                                            ->required()
                                            ->numeric()
                                            ->minValue(0)
                                            ->default(0),
                                        TextInput::make('bathrooms')
                                            ->label('Kamar Mandi')
                                            ->required()
                                            ->numeric()
                                            ->minValue(0)
                                            ->default(0),
                                        TextInput::make('building_area')
                                            ->label('Luas Bangunan')
                                            ->placeholder('36 m2')
                                            ->maxLength(255),
                                        TextInput::make('land_area')
                                            ->label('Luas Tanah')
                                            ->placeholder('72 m2')
                                            ->maxLength(255),
                                        TagsInput::make('features')
                                            ->label('Fitur Unit')
                                            ->placeholder('Tekan enter untuk menambah fitur')
                                            ->reorderable()
                                            ->columnSpanFull(),
                                    ])
                                    ->columns(4),

                                Section::make('Spesifikasi Teknis')
                                    ->description('Contoh: pondasi, dinding, lantai, listrik, air, dan material lain.')
                                    ->schema([
                                        KeyValue::make('specifications')
                                            ->label('Spesifikasi Unit')
                                            ->keyLabel('Nama Spesifikasi')
                                            ->valueLabel('Detail / Spesifikasi')
                                            ->addActionLabel('Tambah Spesifikasi')
                                            ->reorderable()
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
                                    ]),
                            ]),

                        Tab::make('Foto dan Status')
                            ->schema([
                                Section::make('Media Unit')
                                    ->description('Gunakan foto tajam dan denah yang mudah dibaca.')
                                    ->schema([
                                        FileUpload::make('image')
                                            ->image()
                                            ->imageEditor()
                                            ->imagePreviewHeight('190')
                                            ->maxSize(4096)
                                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                                            ->disk('public')
                                            ->directory('clusters')
                                            ->label('Foto Utama'),
                                        FileUpload::make('denah_image')
                                            ->image()
                                            ->multiple()
                                            ->reorderable()
                                            ->maxFiles(5)
                                            ->imagePreviewHeight('190')
                                            ->maxSize(4096)
                                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                                            ->disk('public')
                                            ->directory('clusters')
                                            ->label('Foto Denah Rumah'),
                                    ])
                                    ->columns(2),

                                Section::make('Status Publikasi')
                                    ->description('Matikan unit yang belum siap tampil di website.')
                                    ->schema([
                                        Toggle::make('is_active')
                                            ->label('Tampilkan di Website')
                                            ->required()
                                            ->default(true)
                                            ->onColor('success')
                                            ->offColor('gray'),
                                    ]),
                            ]),
                    ])
                    ->persistTabInQueryString('unit-tab')
                    ->columnSpanFull(),
            ]);
    }
}

