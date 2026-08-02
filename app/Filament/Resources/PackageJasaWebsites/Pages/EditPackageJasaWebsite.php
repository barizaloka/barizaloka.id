<?php

namespace App\Filament\Resources\PackageJasaWebsites\Pages;

use App\Filament\Resources\PackageJasaWebsites\PackageJasaWebsiteResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPackageJasaWebsite extends EditRecord
{
    protected static string $resource = PackageJasaWebsiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
