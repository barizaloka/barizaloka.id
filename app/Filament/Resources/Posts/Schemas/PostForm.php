<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Models\Post;
use App\Rules\UniqueSlugGlobal;
use App\Rules\UniqueSlugPerMonth;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Konten Utama')
                    ->columnSpan(2)
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul')
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
                            ->live(onBlur: true)
                            ->rules(fn (Get $get, ?Post $record) => [
                                'alpha_dash',
                                $get('permalink_format') === 'slug'
                                    ? new UniqueSlugGlobal($record?->id)
                                    : new UniqueSlugPerMonth($get('published_at'), $record?->id),
                            ])
                            ->helperText(fn (Get $get) => $get('permalink_format') === 'slug'
                                ? 'Permalink: barizaloka.id/'.($get('slug') ?: '{slug}')
                                : 'Permalink: barizaloka.id/'.($get('published_at') ? Carbon::parse($get('published_at')) : now())->format('Y/m').'/'.($get('slug') ?: '{slug}')),

                        Textarea::make('excerpt')
                            ->label('Ringkasan')
                            ->rows(3)
                            ->maxLength(500)
                            ->columnSpanFull(),

                        RichEditor::make('content')
                            ->label('Konten')
                            ->required()
                            ->fileAttachmentsDirectory('blog/attachments')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Media')
                    ->columnSpan(2)
                    ->schema([
                        FileUpload::make('featured_image')
                            ->label('Gambar Unggulan')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('blog/images')
                            ->columnSpanFull(),
                    ]),

                Section::make('Pengaturan Publikasi')
                    ->columnSpan(1)
                    ->schema([
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'draft' => 'Draft',
                                'published' => 'Dipublikasikan',
                                'scheduled' => 'Terjadwal',
                            ])
                            ->default('draft')
                            ->required(),

                        DateTimePicker::make('published_at')
                            ->label('Tanggal Publikasi')
                            ->live()
                            ->native(false),

                        Select::make('permalink_format')
                            ->label('Format Permalink')
                            ->options([
                                'tahun_bulan_slug' => 'Tahun/Bulan/Slug (default)',
                                'slug' => 'Slug langsung',
                            ])
                            ->default('tahun_bulan_slug')
                            ->required()
                            ->live(),

                        Toggle::make('is_featured')
                            ->label('Artikel Unggulan'),
                    ]),

                Section::make('Taksonomi')
                    ->columnSpan(1)
                    ->schema([
                        Select::make('category_id')
                            ->label('Kategori')
                            ->relationship('category', 'name')
                            ->searchable()
                            ->preload()
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->label('Nama Kategori')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (string $state, callable $set) => $set('slug', Str::slug($state))),
                                TextInput::make('slug')
                                    ->required(),
                            ]),

                        Select::make('tags')
                            ->label('Tag')
                            ->relationship('tags', 'name')
                            ->multiple()
                            ->searchable()
                            ->preload()
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->label('Nama Tag')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (string $state, callable $set) => $set('slug', Str::slug($state))),
                                TextInput::make('slug')
                                    ->required(),
                            ]),

                        Select::make('user_id')
                            ->label('Penulis')
                            ->relationship('author', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),
                    ]),

                Section::make('SEO')
                    ->columnSpan(2)
                    ->collapsed()
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('Meta Title')
                            ->maxLength(70),

                        Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->maxLength(160)
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ])
            ->columns(2);
    }
}
