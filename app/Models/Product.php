<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'main_image',
        'images',
        'description',
        'price',
        'status',
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function category() {
        return $this->belongsTo(ProductCategory::class);
    }

    protected static function booted()
    {
        static::deleting(function ($product) {
            // Delete main image if it exists
            if ($product->main_image) {
                Storage::disk('public')->delete($product->main_image);
            }

            // Delete additional images if they exist
            if ($product->images) {
                foreach ($product->images as $image) {
                    Storage::disk('public')->delete($image);
                }
            }
        });
    }
}
