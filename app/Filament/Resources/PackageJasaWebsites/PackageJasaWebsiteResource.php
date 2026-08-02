<?php

namespace App\Filament\Resources\PackageJasaWebsites;

use App\Filament\Resources\PackageJasaWebsites\Pages\CreatePackageJasaWebsite;
use App\Filament\Resources\PackageJasaWebsites\Pages\EditPackageJasaWebsite;
use App\Filament\Resources\PackageJasaWebsites\Pages\ListPackageJasaWebsites;
use App\Filament\Resources\PackageJasaWebsites\Pages\ViewPackageJasaWebsite;
use App\Filament\Resources\PackageJasaWebsites\Schemas\PackageJasaWebsiteForm;
use App\Filament\Resources\PackageJasaWebsites\Schemas\PackageJasaWebsiteInfolist;
use App\Filament\Resources\PackageJasaWebsites\Tables\PackageJasaWebsitesTable;
use App\Models\PackageJasaWebsite;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PackageJasaWebsiteResource extends Resource
{
    protected static ?string $model = PackageJasaWebsite::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCurrencyDollar;

    protected static string|\UnitEnum|null $navigationGroup = 'Halaman';

    protected static ?string $navigationLabel = 'Paket Harga';

    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PackageJasaWebsiteForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PackageJasaWebsiteInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PackageJasaWebsitesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPackageJasaWebsites::route('/'),
            'create' => CreatePackageJasaWebsite::route('/create'),
            'view' => ViewPackageJasaWebsite::route('/{record}'),
            'edit' => EditPackageJasaWebsite::route('/{record}/edit'),
        ];
    }
}
