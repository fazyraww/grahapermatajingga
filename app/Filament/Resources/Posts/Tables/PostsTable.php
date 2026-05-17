<?php

namespace App\Filament\Resources\Posts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->heading('Berita & Promo')
            ->description('Kelola publikasi marketing, artikel berita, dan promo yang tampil di website.')
            ->searchPlaceholder('Cari judul, slug, atau tipe konten')
            ->persistSearchInSession()
            ->persistFiltersInSession()
            ->defaultSort('published_at', 'desc')
            ->paginated([10, 25, 50, 100])
            ->defaultPaginationPageOption(10)
            ->striped()
            ->stackedOnMobile()
            ->emptyStateIcon(Heroicon::OutlinedNewspaper)
            ->emptyStateHeading('Belum ada berita atau promo')
            ->emptyStateDescription('Tambahkan artikel berita atau promo untuk ditampilkan di website.')
            ->columns([
                TextColumn::make('type')
                    ->label('Tipe')
                    ->badge()
                    ->formatStateUsing(fn (?string $state): string => match ($state) {
                        'news' => 'Berita',
                        'promo' => 'Promo',
                        default => filled($state) ? ucfirst($state) : 'Belum diset',
                    })
                    ->color(fn (?string $state): string => match ($state) {
                        'promo' => 'warning',
                        'news' => 'info',
                        default => 'gray',
                    })
                    ->searchable(),
                TextColumn::make('title')
                    ->label('Judul')
                    ->limit(56)
                    ->sortable()
                    ->searchable(),
                TextColumn::make('slug')
                    ->label('Slug')
                    ->copyable()
                    ->searchable(),
                ImageColumn::make('image')
                    ->label('Gambar')
                    ->imageSize(52)
                    ->square(),
                TextColumn::make('published_at')
                    ->label('Publikasi')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->label('Tipe Konten')
                    ->options([
                        'news' => 'Berita',
                        'promo' => 'Promo',
                    ])
                    ->native(false),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
