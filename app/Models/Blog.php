<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Blog extends Model
{
    // Các thuộc tính có thể được gán hàng loạt
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'status',
        'date_publish',
        'meta_title',
        'meta_description',
        'meta_keyword',
    ];

    protected $casts = [
        'date_publish' => 'date',
    ];

    // Mối quan hệ với BlogCategory
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(BlogCategory::class, 'blog_category_has', 'blog_id', 'blog_category_id');
    }
}
