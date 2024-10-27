<?php

namespace App\Filament\Resources\SiteSetting\SiteSettingResource\Pages;

use App\Filament\Resources\SiteSetting\SiteSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSiteSetting extends EditRecord
{
    protected static string $resource = SiteSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
