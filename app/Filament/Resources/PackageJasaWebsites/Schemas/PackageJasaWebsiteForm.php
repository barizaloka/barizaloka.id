<?php

namespace App\Filament\Resources\PackageJasaWebsites\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PackageJasaWebsiteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Paket')
                    ->columnSpan(2)
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Paket')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, string $state, callable $set) => $operation === 'create'
                                ? $set('slug', Str::slug($state))
                                : null
                            ),

                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->rules(['alpha_dash']),

                        Textarea::make('tagline')
                            ->label('Tagline / Ringkasan')
                            ->rows(2)
                            ->maxLength(500)
                            ->columnSpanFull(),

                        TextInput::make('price')
                            ->label('Harga (angka)')
                            ->required()
                            ->numeric()
                            ->prefix('Rp'),

                        TextInput::make('price_label')
                            ->label('Label Harga')
                            ->required()
                            ->maxLength(50)
                            ->placeholder('Rp 350rb'),

                        TextInput::make('price_period')
                            ->label('Periode Harga')
                            ->required()
                            ->maxLength(50)
                            ->default('per tahun'),

                        Repeater::make('features')
                            ->label('Daftar Fitur')
                            ->schema([
                                TextInput::make('text')
                                    ->label('Teks Fitur')
                                    ->required()
                                    ->helperText('Bisa gunakan tag <strong> untuk menebalkan teks.')
                                    ->columnSpan(3),

                                Toggle::make('indent')
                                    ->label('Sub-poin')
                                    ->columnSpan(1),
                            ])
                            ->columns(4)
                            ->reorderable()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Pengaturan')
                    ->columnSpan(1)
                    ->schema([
                        TextInput::make('cta_label')
                            ->label('Label Tombol')
                            ->maxLength(100)
                            ->placeholder('Pilih Paket Landing'),

                        TextInput::make('whatsapp_message')
                            ->label('Pesan WhatsApp')
                            ->maxLength(255),

                        Toggle::make('is_featured')
                            ->label('Paket Unggulan'),

                        TextInput::make('badge_label')
                            ->label('Label Badge')
                            ->maxLength(50)
                            ->placeholder('Paling Populer'),

                        TextInput::make('order')
                            ->label('Urutan')
                            ->numeric()
                            ->default(0),
                    ]),
            ])
            ->columns(3);
    }
}
