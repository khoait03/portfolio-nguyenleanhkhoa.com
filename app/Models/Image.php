<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //

    protected $fillable = [
        'name',
        'image',
        'path',
        'description',
        'alt_text',
    ];


    public function setImagePath(string $imageName): void
    {
        // Tạo đường dẫn hoàn chỉnh
        $this->path = config('APP_URL') . '/storage/' . $imageName;
    }
}
