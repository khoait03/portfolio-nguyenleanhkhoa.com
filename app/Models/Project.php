<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{

    protected $fillable = [
        'title',        // Tiêu đề của dự án
        'slug',         // Đường dẫn SEO
        'description',  // Mô tả chi tiết dự án
        'images',        // Ảnh đại diện của dự án
        'main_image',
        'list_image',   // Ảnh danh sách của dự án
        'link_demo',    // Đường dẫn demo dự án
        'github',       // Đường dẫn GitHub của dự án
        'status',       // Trạng thái (0 hoặc 1)
        'meta_title',
        'meta_description',
        'meta_keyword',
    ];

    protected $casts = [
        'images' => 'array',
    ];


    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_projects');
    }
}
