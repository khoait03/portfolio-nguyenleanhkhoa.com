<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    /**
     * Khai báo bảng tương ứng trong database
     */
    protected $table = 'site_settings';

    /**
     * Các trường có thể điền (fillable fields)
     */
    protected $fillable = [
        'company_name',
        'brand_name',
        'slogan',
        'logo_website',
        'logo_mobile',
        'favicon',
        'copyright',
        'website_status',
        'short_intro',
        'company_address',
        'tax_code',
        'phone',
        'email',
        'website',
        'map',
        'seo_title',
        'seo_keywords',
        'seo_description',
        'seo_image',
        'facebook',
        'youtube',
        'twitter',
        'tiktok',
        'instagram',
        'linkedin',
    ];

    /**
     * Các trường có kiểu boolean
     */
    protected $casts = [
        'website_status' => 'boolean',
    ];
}
