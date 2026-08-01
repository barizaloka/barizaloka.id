<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ServiceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Layanan')
                    ->schema([
                        TextEntry::make('icon')->label('Ikon'),
                        TextEntry::make('name')->label('Nama'),
                        TextEntry::make('slug')->label('Slug'),
                        TextEntry::make('price_from')->label('Harga Mulai Dari'),
                        TextEntry::make('summary')->label('Ringkasan')->columnSpanFull(),
                        IconEntry::make('is_featured')->label('Unggulan')->boolean(),
                    ])
                    ->columns(2),
            ]);
    }
}
