<?php

namespace App\Filament\Resources\BlogCategory\BlogCategoryResource\Pages;

use App\Filament\Resources\BlogCategory\BlogCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBlogCategory extends CreateRecord
{
    protected static string $resource = BlogCategoryResource::class;
}
