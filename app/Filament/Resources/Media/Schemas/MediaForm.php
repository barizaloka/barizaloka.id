<?php

namespace App\Filament\Resources\Media\Schemas;

use App\Models\Media;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\HtmlString;

class MediaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detail Media')
                    ->columns(2)
                    ->schema([
                        Placeholder::make('preview')
                            ->label('Pratinjau')
                            ->columnSpanFull()
                            ->content(fn (?Media $record) => $record?->isImage()
                                ? new HtmlString('<img src="'.e($record->url()).'" class="max-h-64 rounded-lg border" alt="">')
                                : $record?->name),

                        TextInput::make('name')
                            ->label('Nama File')
                            ->disabled()
                            ->dehydrated(false),

                        TextInput::make('mime_type')
                            ->label('Tipe')
                            ->disabled()
                            ->dehydrated(false),

                        TextInput::make('alt_text')
                            ->label('Teks Alternatif (Alt Text)')
                            ->maxLength(255)
                            ->columnSpanFull(),

                        TextInput::make('caption')
                            ->label('Keterangan')
                            ->maxLength(255)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
