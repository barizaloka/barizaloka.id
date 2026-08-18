<?php

namespace App\Filament\Resources\Media\Pages;

use App\Filament\Resources\Media\MediaResource;
use App\Models\Media;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Auth;

class ListMedia extends ListRecords
{
    protected static string $resource = MediaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('upload')
                ->label('Unggah Media')
                ->modalHeading('Unggah Media')
                ->modalSubmitActionLabel('Unggah')
                ->schema([
                    FileUpload::make('files')
                        ->label('File')
                        ->multiple()
                        ->disk('public')
                        ->directory('media')
                        ->image()
                        ->imageEditor()
                        ->required(),
                ])
                ->action(function (array $data): void {
                    foreach ($data['files'] as $path) {
                        Media::track('public', $path, Auth::id());
                    }

                    Notification::make()
                        ->title('Media berhasil diunggah')
                        ->success()
                        ->send();
                }),
        ];
    }
}
