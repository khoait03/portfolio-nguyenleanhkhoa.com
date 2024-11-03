<?php

namespace App\Filament\Resources\LicenseCategory\LicenseCategoryResource\Pages;

use App\Filament\Resources\LicenseCategory\LicenseCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLicenseCategories extends ListRecords
{
    protected static string $resource = LicenseCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
