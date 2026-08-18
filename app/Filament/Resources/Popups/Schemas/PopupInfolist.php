<?php

namespace App\Filament\Resources\Popups\Schemas;

use App\Models\Popup;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PopupInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Popup')
                    ->schema([
                        TextEntry::make('name')->label('Nama'),
                        IconEntry::make('is_active')->label('Aktif')->boolean(),
                        TextEntry::make('priority')->label('Prioritas'),
                    ])
                    ->columns(2),

                Section::make('Media')
                    ->schema([
                        RepeatableEntry::make('slides')
                            ->label('')
                            ->schema([
                                TextEntry::make('type')
                                    ->label('Tipe')
                                    ->formatStateUsing(fn (string $state) => $state === 'video' ? 'Video' : 'Gambar'),
                                ImageEntry::make('media_path')
                                    ->label('Preview')
                                    ->disk('public')
                                    ->visible(fn ($record) => $record?->type === 'image'),
                                TextEntry::make('media_path')
                                    ->label('File Video')
                                    ->visible(fn ($record) => $record?->type === 'video'),
                                TextEntry::make('button_label')->label('Teks Tombol')->placeholder('—'),
                                TextEntry::make('button_url')->label('URL Tombol')->placeholder('—'),
                            ])
                            ->columns(2)
                            ->columnSpanFull(),
                    ]),

                Section::make('Target & Jadwal')
                    ->schema([
                        TextEntry::make('target_type')
                            ->label('Target')
                            ->formatStateUsing(fn (string $state) => match ($state) {
                                'all' => 'Semua halaman',
                                'pages' => 'Halaman tertentu',
                                'categories' => 'Kategori tertentu',
                                default => $state,
                            }),
                        TextEntry::make('frequency')
                            ->label('Frekuensi')
                            ->formatStateUsing(fn (string $state) => Popup::frequencyOptions()[$state] ?? $state),
                        TextEntry::make('start_at')->label('Mulai')->dateTime('d M Y H:i')->placeholder('—'),
                        TextEntry::make('end_at')->label('Berhenti')->dateTime('d M Y H:i')->placeholder('—'),
                    ])
                    ->columns(2),
            ]);
    }
}
