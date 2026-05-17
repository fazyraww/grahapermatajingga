<?php

namespace App\Filament\Resources\Facilities\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class FacilitiesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->heading('Fasilitas')
            ->description('Kelola fasilitas unggulan yang membangun persepsi premium di website.')
            ->searchPlaceholder('Cari fasilitas atau ikon')
            ->persistSearchInSession()
            ->persistFiltersInSession()
            ->defaultSort('order')
            ->paginated([10, 25, 50, 100])
            ->defaultPaginationPageOption(10)
            ->striped()
            ->stackedOnMobile()
            ->emptyStateIcon(Heroicon::OutlinedSparkles)
            ->emptyStateHeading('Belum ada fasilitas')
            ->emptyStateDescription('Tambahkan fasilitas yang ingin ditampilkan kepada calon pembeli.')
            ->columns([
                ImageColumn::make('image')
                    ->label('Gambar')
                    ->imageSize(52)
                    ->square(),
                TextColumn::make('title')
                    ->label('Nama Fasilitas')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('icon')
                    ->label('Icon')
                    ->fontFamily('mono'),
                ToggleColumn::make('is_active')
                    ->label('Aktif'),
                TextColumn::make('order')
                    ->label('Urutan')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
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
