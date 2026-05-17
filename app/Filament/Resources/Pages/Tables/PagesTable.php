<?php

namespace App\Filament\Resources\Pages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;

class PagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->heading('Halaman Website')
            ->description('Kelola konten utama yang tampil di halaman publik Graha Permata Jingga.')
            ->searchPlaceholder('Cari halaman atau slug')
            ->persistSearchInSession()
            ->defaultSort('updated_at', 'desc')
            ->paginated([10, 25, 50, 100])
            ->defaultPaginationPageOption(10)
            ->striped()
            ->stackedOnMobile()
            ->emptyStateIcon(Heroicon::OutlinedDocumentText)
            ->emptyStateHeading('Belum ada halaman')
            ->emptyStateDescription('Tambahkan halaman CMS untuk mengisi konten website.')
            ->columns([
                TextColumn::make('title')
                    ->label('Judul Halaman')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('slug')
                    ->label('Slug')
                    ->fontFamily('mono')
                    ->color('gray')
                    ->copyable(),
                ImageColumn::make('image')
                    ->label('Gambar')
                    ->imageSize(52)
                    ->square(),
                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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
