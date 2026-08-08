<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestPosts extends TableWidget
{
    protected static bool $isLazy = false;

    protected static ?int $sort = 2;

    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->heading('Postingan Terbaru')
            ->query(fn (): Builder => Post::query()->with(['author', 'category'])->latest())
            ->columns([
                ImageColumn::make('featured_image')
                    ->label('Gambar')
                    ->circular(),

                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->limit(50)
                    ->weight('medium'),

                TextColumn::make('author.name')
                    ->label('Penulis'),

                TextColumn::make('category.name')
                    ->label('Kategori')
                    ->badge()
                    ->placeholder('-'),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'published' => 'success',
                        'draft' => 'gray',
                        'scheduled' => 'warning',
                        default => 'gray',
                    }),

                TextColumn::make('views_count')
                    ->label('Dilihat')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->since()
                    ->sortable(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->paginated([5]);
    }
}
