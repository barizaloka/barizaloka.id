<?php

namespace App\Filament\Resources\Popups\Schemas;

use App\Models\Popup;
use Filament\Infolists\Components\IconEntry;
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
                        TextEntry::make('html_content')
                            ->label('Konten HTML')
                            ->columnSpanFull()
                            ->markdown(false)
                            ->extraAttributes(['class' => 'font-mono text-xs whitespace-pre-wrap']),
                    ])
                    ->columns(2),

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
