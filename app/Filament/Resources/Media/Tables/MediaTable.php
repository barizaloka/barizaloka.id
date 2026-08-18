<?php

namespace App\Filament\Resources\Media\Tables;

use App\Models\Media;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Enums\FontWeight;
use Filament\Support\Enums\TextSize;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MediaTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->contentGrid([
                'sm' => 2,
                'md' => 3,
                'xl' => 4,
                '2xl' => 5,
            ])
            ->columns([
                Stack::make([
                    ImageColumn::make('path')
                        ->label('')
                        ->disk(fn (?Media $record) => $record?->disk)
                        ->visibility('public')
                        ->height('10rem')
                        ->extraImgAttributes(['class' => 'w-full object-cover'])
                        ->visible(fn (?Media $record) => $record?->isImage() ?? false),

                    TextColumn::make('name')
                        ->label('Nama File')
                        ->weight(FontWeight::Medium)
                        ->searchable()
                        ->limit(30),

                    TextColumn::make('humanSize')
                        ->label('Ukuran')
                        ->state(fn (?Media $record) => $record?->humanSize())
                        ->color('gray')
                        ->size(TextSize::ExtraSmall),

                    TextColumn::make('created_at')
                        ->label('Diunggah')
                        ->dateTime('d M Y')
                        ->color('gray')
                        ->size(TextSize::ExtraSmall),
                ]),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
