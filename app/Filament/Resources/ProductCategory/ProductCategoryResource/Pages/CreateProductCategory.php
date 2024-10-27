<?php

namespace App\Filament\Resources\ProductCategory\ProductCategoryResource\Pages;

use App\Filament\Resources\ProductCategory\ProductCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProductCategory extends CreateRecord
{
    protected static string $resource = ProductCategoryResource::class;
}
