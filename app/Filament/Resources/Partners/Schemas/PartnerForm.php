<?php

namespace App\Filament\Resources\Partners\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Mitra & Klien')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        TextInput::make('icon')
                            ->label('Ikon (emoji)')
                            ->maxLength(10)
                            ->placeholder('🕌'),

                        TextInput::make('location')
                            ->label('Lokasi')
                            ->maxLength(255)
                            ->placeholder('Rembang, Jawa Tengah'),

                        TextInput::make('url')
                            ->label('URL')
                            ->url()
                            ->maxLength(255)
                            ->placeholder('https://')
                            ->columnSpanFull(),

                        TextInput::make('order')
                            ->label('Urutan')
                            ->numeric()
                            ->default(0),

                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }
}
