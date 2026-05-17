<?php

namespace App\Filament\Resources\Videos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class VideosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->heading('Video')
            ->description('Kelola video YouTube, TikTok, dan konten media yang tampil di website.')
            ->searchPlaceholder('Cari judul, tipe, atau URL video')
            ->persistSearchInSession()
            ->persistFiltersInSession()
            ->defaultSort('order')
            ->paginated([10, 25, 50, 100])
            ->defaultPaginationPageOption(10)
            ->striped()
            ->stackedOnMobile()
            ->emptyStateIcon(Heroicon::OutlinedVideoCamera)
            ->emptyStateHeading('Belum ada video')
            ->emptyStateDescription('Tambahkan video untuk memperkaya halaman media dan promosi.')
            ->columns([
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('type')
                    ->label('Tipe')
                    ->badge()
                    ->color(fn (?string $state): string => match ($state) {
                        'tiktok' => 'gray',
                        'youtube' => 'danger',
                        default => 'primary',
                    }),
                TextColumn::make('url')
                    ->label('URL')
                    ->limit(40)
                    ->copyable(),
                ToggleColumn::make('is_active')
                    ->label('Aktif'),
                TextColumn::make('order')
                    ->label('Urutan')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->label('Tipe Video')
                    ->options([
                        'youtube' => 'YouTube',
                        'tiktok' => 'TikTok',
                    ])
                    ->native(false),
                TernaryFilter::make('is_active')
                    ->label('Status')
                    ->placeholder('Semua status')
                    ->trueLabel('Aktif')
                    ->falseLabel('Nonaktif'),
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
