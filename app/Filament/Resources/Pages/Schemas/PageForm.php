<?php

namespace App\Filament\Resources\Pages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns([
                'default' => 1,
                'xl' => 3,
            ])
            ->components([
                Tabs::make('Konten Halaman')
                    ->tabs([
                        Tab::make('Konten Utama')
                            ->schema([
                                Section::make('Identitas Halaman')
                                    ->description('Judul dan slug dipakai sebagai identitas halaman di admin dan frontend.')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Judul Halaman')
                                            ->required()
                                            ->maxLength(255)
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(fn (string $operation, $state, $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),
                                        TextInput::make('slug')
                                            ->required()
                                            ->maxLength(255)
                                            ->unique(ignoreRecord: true),
                                    ])
                                    ->columns(2),

                                Section::make('Isi Halaman')
                                    ->description('Konten yang muncul pada halaman terkait.')
                                    ->schema([
                                        RichEditor::make('content')
                                            ->label('Isi Konten')
                                            ->required()
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        Tab::make('Media dan Lokasi')
                            ->schema([
                                Section::make('Gambar Halaman')
                                    ->description('Gambar opsional untuk memperkuat tampilan halaman.')
                                    ->schema([
                                        FileUpload::make('image')
                                            ->label('Gambar')
                                            ->image()
                                            ->imageEditor()
                                            ->imagePreviewHeight('190')
                                            ->maxSize(4096)
                                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                                            ->disk('public')
                                            ->directory('pages'),
                                    ]),

                                Section::make('Google Maps')
                                    ->description('Khusus halaman Lokasi. Paste kode iframe Google Maps di sini.')
                                    ->visible(fn ($get) => $get('slug') === 'lokasi')
                                    ->schema([
                                        Textarea::make('google_maps')
                                            ->label('Google Maps Iframe')
                                            ->rows(7)
                                            ->helperText('Paste kode iframe dari Google Maps. Field ini hanya muncul untuk slug lokasi.')
                                            ->columnSpanFull(),
                                    ]),
                            ]),

                        Tab::make('Beranda')
                            ->visible(fn ($get) => $get('slug') === 'beranda')
                            ->schema([
                                Section::make('Slider Utama')
                                    ->description('Kelola banner utama yang tampil di halaman beranda.')
                                    ->schema([
                                        Repeater::make('extra_data.hero_sliders')
                                            ->label('Slider / Banner')
                                            ->schema([
                                                FileUpload::make('image')
                                                    ->label('Gambar Background')
                                                    ->image()
                                                    ->imageEditor()
                                                    ->imagePreviewHeight('160')
                                                    ->maxSize(4096)
                                                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                                                    ->disk('public')
                                                    ->directory('pages/hero')
                                                    ->required(),
                                                TextInput::make('subtitle')
                                                    ->label('Teks Kecil Atas')
                                                    ->placeholder('Selamat Datang Di')
                                                    ->maxLength(255),
                                                TextInput::make('title')
                                                    ->label('Judul Besar')
                                                    ->placeholder('Graha Permata Jingga')
                                                    ->required()
                                                    ->maxLength(255),
                                                TextInput::make('description')
                                                    ->label('Teks Bawah')
                                                    ->placeholder('Harmoni Hunian Mewah dan Asri')
                                                    ->maxLength(255),
                                            ])
                                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? 'Slider')
                                            ->columns(2)
                                            ->defaultItems(3)
                                            ->reorderable()
                                            ->collapsible()
                                            ->addActionLabel('Tambah Slider')
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Statistik Highlight')
                                    ->description('Angka ringkas yang muncul pada bagian highlight beranda.')
                                    ->schema([
                                        Repeater::make('extra_data.stats')
                                            ->label('Statistik')
                                            ->schema([
                                                TextInput::make('value')
                                                    ->label('Angka')
                                                    ->placeholder('10')
                                                    ->required()
                                                    ->maxLength(30),
                                                TextInput::make('suffix')
                                                    ->label('Akhiran')
                                                    ->placeholder('+ Ha')
                                                    ->maxLength(30),
                                                TextInput::make('label')
                                                    ->label('Label')
                                                    ->placeholder('Total Kawasan')
                                                    ->required()
                                                    ->maxLength(80),
                                            ])
                                            ->itemLabel(fn (array $state): ?string => $state['label'] ?? 'Statistik')
                                            ->columns(3)
                                            ->defaultItems(4)
                                            ->reorderable()
                                            ->addActionLabel('Tambah Statistik')
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Download Brosur')
                                    ->description('Teks dan file brosur untuk ajakan unduh di beranda.')
                                    ->schema([
                                        TextInput::make('extra_data.brochure_text')
                                            ->label('Judul Penawaran')
                                            ->default('DAPATKAN PENAWARAN EKSKLUSIF DARI KAMI')
                                            ->maxLength(255),
                                        FileUpload::make('extra_data.brochure_file')
                                            ->label('File Brosur')
                                            ->acceptedFileTypes(['application/pdf', 'image/jpeg', 'image/png', 'image/webp'])
                                            ->maxSize(8192)
                                            ->disk('public')
                                            ->directory('pages/brochure'),
                                    ])
                                    ->columns(2),
                            ]),

                        Tab::make('SEO')
                            ->schema([
                                Section::make('Meta SEO')
                                    ->description('Opsional, dipakai untuk judul dan deskripsi di mesin pencari.')
                                    ->schema([
                                        TextInput::make('meta_title')
                                            ->label('Meta Title')
                                            ->maxLength(255),
                                        Textarea::make('meta_description')
                                            ->label('Meta Description')
                                            ->rows(5)
                                            ->maxLength(500)
                                            ->columnSpanFull(),
                                    ])
                                    ->columns(2),
                            ]),
                    ])
                    ->persistTabInQueryString('page-tab')
                    ->columnSpanFull(),
            ]);
    }
}
