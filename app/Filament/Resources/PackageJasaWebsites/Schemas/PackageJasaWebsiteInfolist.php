<?php

namespace App\Filament\Resources\PackageJasaWebsites\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PackageJasaWebsiteInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Paket')
                    ->schema([
                        TextEntry::make('name')->label('Nama Paket'),
                        TextEntry::make('slug')->label('Slug'),
                        TextEntry::make('price_label')->label('Harga'),
                        TextEntry::make('price_period')->label('Periode'),
                        TextEntry::make('tagline')->label('Tagline')->columnSpanFull(),
                        IconEntry::make('is_featured')->label('Unggulan')->boolean(),
                        TextEntry::make('badge_label')->label('Badge')->placeholder('—'),
                        RepeatableEntry::make('features')
                            ->label('Daftar Fitur')
                            ->schema([
                                TextEntry::make('text')->label('Fitur')->html(),
                                IconEntry::make('indent')->label('Sub-poin')->boolean(),
                            ])
                            ->columns(2)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}
