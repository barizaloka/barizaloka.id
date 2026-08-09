<?php

namespace App\Filament\Resources\Popups\Pages;

use App\Filament\Resources\Popups\PopupResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPopup extends EditRecord
{
    protected static string $resource = PopupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
