<?php

namespace App\Filament\Resources\Faqs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FaqsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->heading('FAQ')
            ->description('Susun pertanyaan umum agar calon pembeli mendapat jawaban cepat dan jelas.')
            ->searchPlaceholder('Cari pertanyaan FAQ')
            ->persistSearchInSession()
            ->defaultSort('order')
            ->paginated([10, 25, 50, 100])
            ->defaultPaginationPageOption(10)
            ->striped()
            ->stackedOnMobile()
            ->emptyStateIcon(Heroicon::OutlinedQuestionMarkCircle)
            ->emptyStateHeading('Belum ada FAQ')
            ->emptyStateDescription('Tambahkan pertanyaan dan jawaban yang sering ditanyakan calon pembeli.')
            ->columns([
                TextColumn::make('question')
                    ->label('Pertanyaan')
                    ->limit(72)
                    ->searchable(),
                TextColumn::make('order')
                    ->label('Urutan')
                    ->numeric()
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
