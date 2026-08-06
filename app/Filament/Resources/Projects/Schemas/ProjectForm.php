<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Proyek')
                    ->columnSpan(2)
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul Proyek')
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

                        TextInput::make('client_name')
                            ->label('Nama Klien'),

                        Select::make('category')
                            ->label('Kategori')
                            ->options([
                                'pesantren' => 'Pesantren & Masjid',
                                'desa' => 'Desa',
                                'umkm' => 'UMKM',
                                'komunitas' => 'Komunitas & Organisasi',
                            ]),

                        TextInput::make('url')
                            ->label('Tautan Website')
                            ->url(),

                        Textarea::make('summary')
                            ->label('Ringkasan')
                            ->required()
                            ->rows(2)
                            ->maxLength(500)
                            ->columnSpanFull(),

                        RichEditor::make('description')
                            ->label('Deskripsi Lengkap')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Media')
                    ->columnSpan(2)
                    ->schema([
                        FileUpload::make('thumbnail')
                            ->label('Thumbnail')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('portfolio/thumbnails')
                            ->columnSpanFull(),
                    ]),

                Section::make('Pengaturan')
                    ->columnSpan(1)
                    ->schema([
                        Toggle::make('is_featured')
                            ->label('Proyek Unggulan'),

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
