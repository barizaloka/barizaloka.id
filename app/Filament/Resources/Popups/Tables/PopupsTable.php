<?php

namespace App\Filament\Resources\Popups\Tables;

use App\Models\Popup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PopupsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),

                TextColumn::make('target_type')
                    ->label('Target')
                    ->badge()
                    ->formatStateUsing(fn (string $state) => match ($state) {
                        'all' => 'Semua halaman',
                        'pages' => 'Halaman tertentu',
                        'categories' => 'Kategori tertentu',
                        default => $state,
                    }),

                TextColumn::make('frequency')
                    ->label('Frekuensi')
                    ->formatStateUsing(fn (string $state) => Popup::frequencyOptions()[$state] ?? $state)
                    ->toggleable(isToggledHiddenByDefault: true),

                IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),

                TextColumn::make('priority')
                    ->label('Prioritas')
                    ->sortable(),

                TextColumn::make('views_count')
                    ->label('Dilihat')
                    ->counts('views')
                    ->sortable(),

                TextColumn::make('start_at')
                    ->label('Mulai')
                    ->dateTime('d M Y H:i')
                    ->placeholder('—')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('end_at')
                    ->label('Berhenti')
                    ->dateTime('d M Y H:i')
                    ->placeholder('—')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('priority', 'desc');
    }
}
