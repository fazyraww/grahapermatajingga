<?php

namespace App\Filament\Resources\Popups\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class PopupsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->heading('Popup Promo')
            ->description('Atur campaign popup desktop dan mobile dengan status aktif yang mudah dipantau.')
            ->searchPlaceholder('Cari popup atau link')
            ->persistSearchInSession()
            ->persistFiltersInSession()
            ->defaultSort('updated_at', 'desc')
            ->paginated([10, 25, 50, 100])
            ->defaultPaginationPageOption(10)
            ->striped()
            ->stackedOnMobile()
            ->emptyStateIcon(Heroicon::OutlinedBell)
            ->emptyStateHeading('Belum ada popup promo')
            ->emptyStateDescription('Tambahkan popup untuk campaign promosi yang tampil di beranda.')
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Popup')
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('image')
                    ->label('Desktop')
                    ->imageSize(52)
                    ->square(),
                ImageColumn::make('image_mobile')
                    ->label('Mobile')
                    ->imageSize(52)
                    ->square(),
                IconColumn::make('is_active')
                    ->boolean()
                    ->label('Aktif'),
                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                TernaryFilter::make('is_active')
                    ->label('Status')
                    ->placeholder('Semua status')
                    ->trueLabel('Aktif')
                    ->falseLabel('Nonaktif'),
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
