<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TestimonialInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Testimoni')
                    ->schema([
                        ImageEntry::make('avatar')->label('Foto')->circular(),
                        TextEntry::make('name')->label('Nama'),
                        TextEntry::make('role')->label('Peran'),
                        TextEntry::make('rating')->label('Rating'),
                        TextEntry::make('quote')->label('Testimoni')->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}
