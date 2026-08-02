<?php

namespace App\Filament\Resources\PackageJasaWebsites\Pages;

use App\Filament\Resources\PackageJasaWebsites\PackageJasaWebsiteResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPackageJasaWebsites extends ListRecords
{
    protected static string $resource = PackageJasaWebsiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
