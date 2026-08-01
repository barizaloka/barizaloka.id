<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class FaqInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Pertanyaan & Jawaban')
                    ->schema([
                        TextEntry::make('question')->label('Pertanyaan')->columnSpanFull(),
                        TextEntry::make('answer')->label('Jawaban')->columnSpanFull(),
                        TextEntry::make('category')->label('Kategori'),
                    ])
                    ->columns(2),
            ]);
    }
}
