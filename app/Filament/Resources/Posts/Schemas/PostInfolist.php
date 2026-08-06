<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PostInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detail Artikel')
                    ->columnSpan(2)
                    ->schema([
                        TextEntry::make('title')
                            ->label('Judul')
                            ->columnSpanFull(),

                        TextEntry::make('author.name')
                            ->label('Penulis'),

                        TextEntry::make('category.name')
                            ->label('Kategori')
                            ->badge()
                            ->placeholder('-'),

                        TextEntry::make('status')
                            ->label('Status')
                            ->badge()
                            ->color(fn (string $state): string => match ($state) {
                                'published' => 'success',
                                'draft' => 'gray',
                                'scheduled' => 'warning',
                                default => 'gray',
                            }),

                        TextEntry::make('published_at')
                            ->label('Dipublikasikan')
                            ->dateTime('d M Y, H:i')
                            ->placeholder('-'),

                        IconEntry::make('is_featured')
                            ->label('Unggulan')
                            ->boolean(),

                        TextEntry::make('views_count')
                            ->label('Jumlah Dilihat')
                            ->numeric(),

                        TextEntry::make('excerpt')
                            ->label('Ringkasan')
                            ->placeholder('-')
                            ->columnSpanFull(),

                        TextEntry::make('content')
                            ->label('Konten')
                            ->html()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Media')
                    ->columnSpan(2)
                    ->schema([
                        ImageEntry::make('featured_image')
                            ->label('Gambar Unggulan')
                            ->placeholder('-')
                            ->columnSpanFull(),
                    ]),

                Section::make('SEO')
                    ->columnSpan(2)
                    ->schema([
                        TextEntry::make('meta_title')
                            ->label('Meta Title')
                            ->placeholder('-'),

                        TextEntry::make('meta_description')
                            ->label('Meta Description')
                            ->placeholder('-')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ])
            ->columns(2);
    }
}
