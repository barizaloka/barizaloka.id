<?php

namespace App\Filament\Resources\Partners\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PartnerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Mitra & Klien')
                    ->schema([
                        TextEntry::make('name')->label('Nama'),
                        TextEntry::make('icon')->label('Ikon'),
                        TextEntry::make('location')->label('Lokasi'),
                        TextEntry::make('url')->label('URL')->url(fn (?string $state): ?string => $state)->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}
