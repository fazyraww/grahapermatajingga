<?php

namespace App\Filament\Resources\Clusters\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class ClustersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->heading('Produk / Unit')
            ->description('Pantau inventory unit, harga, kategori, dan status publikasi website.')
            ->searchPlaceholder('Cari nama unit, kategori, atau slug')
            ->persistSearchInSession()
            ->persistFiltersInSession()
            ->defaultSort('updated_at', 'desc')
            ->paginated([10, 25, 50, 100])
            ->defaultPaginationPageOption(10)
            ->striped()
            ->stackedOnMobile()
            ->emptyStateIcon(Heroicon::OutlinedHomeModern)
            ->emptyStateHeading('Belum ada produk / unit')
            ->emptyStateDescription('Tambahkan unit rumah lengkap dengan foto, harga, fitur, dan status tampil.')
            ->columns([
                ImageColumn::make('image')
                    ->label('Foto Utama')
                    ->imageSize(56)
                    ->square(),
                TextColumn::make('name')
                    ->label('Nama Unit')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('category.name')
                    ->label('Kategori')
                    ->badge()
                    ->color('primary'),
                TextColumn::make('price')
                    ->label('Harga')
                    ->money('IDR')
                    ->sortable(),
                TextColumn::make('bedrooms')
                    ->label('KT')
                    ->numeric(),
                TextColumn::make('bathrooms')
                    ->label('KM')
                    ->numeric(),
                IconColumn::make('is_active')
                    ->label('Status')
                    ->boolean(),
            ])
            ->filters([
                SelectFilter::make('category_id')
                    ->label('Kategori')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->native(false),
                TernaryFilter::make('is_active')
                    ->label('Status Publikasi')
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
