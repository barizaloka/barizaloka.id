<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProjectInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Proyek')
                    ->schema([
                        ImageEntry::make('thumbnail')->label('Thumbnail')->columnSpanFull(),
                        TextEntry::make('title')->label('Judul'),
                        TextEntry::make('client_name')->label('Klien'),
                        TextEntry::make('category')->label('Kategori')->badge(),
                        TextEntry::make('url')->label('Tautan')->url(fn ($state) => $state)->openUrlInNewTab(),
                        TextEntry::make('summary')->label('Ringkasan')->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}
