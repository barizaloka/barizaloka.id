<?php

namespace App\Filament\Resources\Posts\Tables;

use App\Models\Post;
use Filament\Actions\BulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Collection;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('featured_image')
                    ->label('Gambar')
                    ->circular(),

                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable()
                    ->limit(50),

                TextColumn::make('author.name')
                    ->label('Penulis')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('category.name')
                    ->label('Kategori')
                    ->badge()
                    ->searchable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'published' => 'success',
                        'draft' => 'gray',
                        'scheduled' => 'warning',
                        default => 'gray',
                    }),

                IconColumn::make('is_featured')
                    ->label('Unggulan')
                    ->boolean(),

                IconColumn::make('seo_complete')
                    ->label('SEO')
                    ->boolean()
                    ->getStateUsing(fn (Post $record): bool => self::isSeoComplete($record))
                    ->tooltip(fn (Post $record): string => self::isSeoComplete($record)
                        ? 'Meta title, deskripsi, dan gambar unggulan sudah lengkap'
                        : 'Lengkapi meta title, meta deskripsi, dan gambar unggulan untuk SEO optimal'),

                TextColumn::make('views_count')
                    ->label('Dilihat')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('published_at')
                    ->label('Dipublikasikan')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->placeholder('-'),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Dipublikasikan',
                        'scheduled' => 'Terjadwal',
                    ]),

                SelectFilter::make('category')
                    ->label('Kategori')
                    ->relationship('category', 'name'),

                SelectFilter::make('tags')
                    ->label('Tag')
                    ->relationship('tags', 'name'),

                TernaryFilter::make('is_featured')
                    ->label('Unggulan'),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    BulkAction::make('publish')
                        ->label('Publikasikan')
                        ->icon(Heroicon::OutlinedCheckCircle)
                        ->color('success')
                        ->action(fn (Collection $records) => $records->each->update([
                            'status' => 'published',
                            'published_at' => now(),
                        ]))
                        ->deselectRecordsAfterCompletion()
                        ->requiresConfirmation(),

                    BulkAction::make('unpublish')
                        ->label('Jadikan Draft')
                        ->icon(Heroicon::OutlinedEyeSlash)
                        ->color('warning')
                        ->action(fn (Collection $records) => $records->each->update(['status' => 'draft']))
                        ->deselectRecordsAfterCompletion()
                        ->requiresConfirmation(),

                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    private static function isSeoComplete(Post $record): bool
    {
        return filled($record->meta_title) && filled($record->meta_description) && filled($record->featured_image);
    }
}
