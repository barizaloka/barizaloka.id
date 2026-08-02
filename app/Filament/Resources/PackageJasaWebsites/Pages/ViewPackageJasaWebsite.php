<?php

namespace App\Filament\Resources\PackageJasaWebsites\Pages;

use App\Filament\Resources\PackageJasaWebsites\PackageJasaWebsiteResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPackageJasaWebsite extends ViewRecord
{
    protected static string $resource = PackageJasaWebsiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
