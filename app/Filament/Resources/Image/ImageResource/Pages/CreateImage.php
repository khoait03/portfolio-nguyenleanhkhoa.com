<?php

namespace App\Filament\Resources\Image\ImageResource\Pages;

use App\Filament\Resources\Image\ImageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateImage extends CreateRecord
{
    protected static string $resource = ImageResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Kiểm tra xem có hình ảnh nào được upload không
        if (isset($data['image']) && !empty($data['image'])) {
            // Lưu đường dẫn hoàn chỉnh
            $data['path'] = env('APP_URL') . '/storage/' . $data['image'];

        }

        return $data;
    }
}
