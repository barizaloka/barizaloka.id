<?php

namespace App\Filament\Resources\Popups\Schemas;

use App\Models\Category;
use App\Models\Popup;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
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
                    ])
                    ->columns(2),

                Section::make('Media')
                    ->description('Tambahkan satu atau beberapa gambar/video. Jika lebih dari satu, akan ditampilkan sebagai slider di popup.')
                    ->schema([
                        Repeater::make('slides')
                            ->relationship()
                            ->label('Slide')
                            ->schema([
                                Select::make('type')
                                    ->label('Tipe')
                                    ->options([
                                        'image' => 'Gambar',
                                        'video' => 'Video',
                                    ])
                                    ->default('image')
                                    ->required()
                                    ->live(),

                                FileUpload::make('media_path')
                                    ->label('File')
                                    ->disk('public')
                                    ->directory('popup-slides')
                                    ->acceptedFileTypes(fn ($get) => $get('type') === 'video'
                                        ? ['video/mp4', 'video/webm', 'video/ogg']
                                        : ['image/jpeg', 'image/png', 'image/webp', 'image/gif'])
                                    ->required(),

                                TextInput::make('button_label')
                                    ->label('Teks Tombol')
                                    ->maxLength(255),

                                TextInput::make('button_url')
                                    ->label('URL Tombol')
                                    ->url()
                                    ->maxLength(255),
                            ])
                            ->columns(2)
                            ->orderColumn('sort_order')
                            ->reorderable()
                            ->collapsible()
                            ->itemLabel(fn (array $state) => $state['button_label'] ?? 'Slide')
                            ->addActionLabel('Tambah Slide')
                            ->minItems(1)
                            ->required()
                            ->columnSpanFull(),
                    ]),

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
