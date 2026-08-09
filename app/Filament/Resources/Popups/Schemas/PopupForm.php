<?php

namespace App\Filament\Resources\Popups\Schemas;

use App\Models\Category;
use App\Models\Popup;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PopupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Popup')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Popup')
                            ->helperText('Untuk keperluan internal, tidak ditampilkan ke pengunjung.')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->default(true),

                        TextInput::make('priority')
                            ->label('Prioritas')
                            ->helperText('Jika ada beberapa popup cocok di halaman yang sama, prioritas tertinggi yang ditampilkan.')
                            ->numeric()
                            ->default(0),

                        Textarea::make('html_content')
                            ->label('Konten HTML + Tailwind CSS')
                            ->helperText('Tulis markup HTML lengkap untuk isi popup. Sertakan tombol tutup dengan atribut onclick="closePopup()".')
                            ->required()
                            ->rows(12)
                            ->extraInputAttributes(['style' => 'font-family: ui-monospace, monospace; font-size: 0.8125rem;'])
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Target Tampilan')
                    ->schema([
                        Radio::make('target_type')
                            ->label('Tampilkan di')
                            ->options([
                                'all' => 'Semua halaman',
                                'pages' => 'Halaman tertentu',
                                'categories' => 'Kategori blog tertentu',
                            ])
                            ->default('all')
                            ->live()
                            ->columnSpanFull(),

                        CheckboxList::make('pages')
                            ->label('Halaman')
                            ->options(Popup::availablePages())
                            ->visible(fn ($get) => $get('target_type') === 'pages')
                            ->columns(2)
                            ->columnSpanFull(),

                        TagsInput::make('url_patterns')
                            ->label('Pattern URL (opsional)')
                            ->helperText('Untuk halaman dinamis, gunakan wildcard * — contoh: blog/kategori/*, jasa-website-*')
                            ->placeholder('contoh: jasa-website-*')
                            ->visible(fn ($get) => $get('target_type') === 'pages')
                            ->columnSpanFull(),

                        Select::make('category_ids')
                            ->label('Kategori Blog')
                            ->multiple()
                            ->options(fn () => Category::query()->orderBy('name')->pluck('name', 'id'))
                            ->searchable()
                            ->visible(fn ($get) => $get('target_type') === 'categories')
                            ->columnSpanFull(),
                    ]),

                Section::make('Frekuensi & Jadwal')
                    ->schema([
                        Select::make('frequency')
                            ->label('Frekuensi Tampil')
                            ->options(Popup::frequencyOptions())
                            ->default('once_per_session')
                            ->required(),

                        TextInput::make('delay_seconds')
                            ->label('Jeda Sebelum Muncul (detik)')
                            ->numeric()
                            ->default(0),

                        DateTimePicker::make('start_at')
                            ->label('Mulai Tampil'),

                        DateTimePicker::make('end_at')
                            ->label('Berhenti Tampil'),
                    ])
                    ->columns(2),
            ]);
    }
}
