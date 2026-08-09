<?php

namespace App\Filament\Resources\Popups\Pages;

use App\Filament\Resources\Popups\PopupResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPopup extends ViewRecord
{
    protected static string $resource = PopupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
