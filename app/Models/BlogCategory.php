<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BlogCategory extends Model
{
    // Các thuộc tính có thể được gán hàng loạt
    protected $fillable = [
        'name',
        'slug',
    ];

    // Mối quan hệ với Blog
    public function blogs(): BelongsToMany
    {
        return $this->belongsToMany(Blog::class, 'blog_category_has', 'blog_category_id', 'blog_id');
    }
}
