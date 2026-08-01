<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Layanan')
                    ->columnSpan(2)
                    ->schema([
                        TextInput::make('icon')
                            ->label('Ikon (emoji)')
                            ->maxLength(10),

                        TextInput::make('name')
                            ->label('Nama Layanan')
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

                        TextInput::make('price_from')
                            ->label('Harga Mulai Dari')
                            ->maxLength(50)
                            ->placeholder('Rp 350.000'),

                        Textarea::make('summary')
                            ->label('Ringkasan')
                            ->required()
                            ->rows(2)
                            ->maxLength(500)
                            ->columnSpanFull(),

                        RichEditor::make('description')
                            ->label('Deskripsi Lengkap')
                            ->required()
                            ->columnSpanFull(),

                        Repeater::make('features')
                            ->label('Poin Fitur / Manfaat')
                            ->simple(
                                TextInput::make('feature')->label('Fitur')->required()
                            )
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Pengaturan')
                    ->columnSpan(1)
                    ->schema([
                        Toggle::make('is_featured')
                            ->label('Layanan Unggulan'),

                        TextInput::make('order')
                            ->label('Urutan')
                            ->numeric()
                            ->default(0),
                    ]),

                Section::make('SEO')
                    ->columnSpan(1)
                    ->collapsed()
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('Meta Title')
                            ->maxLength(70),

                        Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->maxLength(160)
                            ->rows(3),
                    ]),
            ])
            ->columns(3);
    }
}
