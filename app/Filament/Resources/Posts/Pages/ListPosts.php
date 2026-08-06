<?php

namespace App\Filament\Resources\Posts\Pages;

use App\Filament\Resources\Posts\PostResource;
use App\Services\WordPressXmlImportService;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('importWordPressXml')
                ->label('Import dari WordPress')
                ->icon(Heroicon::OutlinedArrowUpTray)
                ->color('gray')
                ->modalHeading('Import Artikel dari WordPress (XML)')
                ->modalDescription('Unggah file export XML (WXR) dari WordPress untuk mengimpor artikel sebagai draft/publikasi.')
                ->schema([
                    FileUpload::make('file')
                        ->label('File Export XML')
                        ->required()
                        ->acceptedFileTypes(['text/xml', 'application/xml', 'application/rss+xml'])
                        ->disk('local')
                        ->directory('wordpress-imports')
                        ->visibility('private'),
                    Toggle::make('only_published')
                        ->label('Hanya artikel yang sudah dipublikasikan')
                        ->default(true),
                ])
                ->action(function (array $data, WordPressXmlImportService $importer): void {
                    $path = $data['file'];
                    $contents = Storage::disk('local')->get($path);

                    $result = $importer->import(
                        $contents,
                        Auth::user(),
                        (bool) $data['only_published'],
                    );

                    Storage::disk('local')->delete($path);

                    Notification::make()
                        ->title('Import selesai')
                        ->body("{$result['imported']} artikel diimpor, {$result['skipped']} dilewati.")
                        ->success()
                        ->send();
                }),
            CreateAction::make(),
        ];
    }
}
