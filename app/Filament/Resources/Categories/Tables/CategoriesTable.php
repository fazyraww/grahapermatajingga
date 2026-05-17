<?php

namespace App\Filament\Resources\Categories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->heading('Kategori Produk')
            ->description('Kelola pengelompokan produk agar katalog unit lebih mudah dipindai.')
            ->searchPlaceholder('Cari kategori atau slug')
            ->persistSearchInSession()
            ->defaultSort('created_at', 'desc')
            ->paginated([10, 25, 50, 100])
            ->defaultPaginationPageOption(10)
            ->striped()
            ->stackedOnMobile()
            ->emptyStateIcon(Heroicon::OutlinedRectangleStack)
            ->emptyStateHeading('Belum ada kategori produk')
            ->emptyStateDescription('Tambahkan kategori untuk mengelompokkan unit rumah dan area komersial.')
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Kategori')
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
                //
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
