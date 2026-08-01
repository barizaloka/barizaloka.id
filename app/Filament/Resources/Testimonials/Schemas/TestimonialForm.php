<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Testimoni')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('role')
                            ->label('Peran / Instansi')
                            ->maxLength(255),

                        Select::make('service_id')
                            ->label('Layanan Terkait')
                            ->relationship('service', 'name')
                            ->searchable()
                            ->preload(),

                        Select::make('rating')
                            ->label('Rating')
                            ->options([5 => '5', 4 => '4', 3 => '3', 2 => '2', 1 => '1'])
                            ->default(5)
                            ->required(),

                        Textarea::make('quote')
                            ->label('Testimoni')
                            ->required()
                            ->rows(4)
                            ->columnSpanFull(),

                        FileUpload::make('avatar')
                            ->label('Foto')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('testimonials/avatars')
                            ->columnSpanFull(),

                        Toggle::make('is_featured')
                            ->label('Tampilkan di Beranda'),

                        TextInput::make('order')
                            ->label('Urutan')
                            ->numeric()
                            ->default(0),
                    ])
                    ->columns(2),
            ]);
    }
}
