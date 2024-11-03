<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    //
    protected $fillable = [
        'license_key',
        'product_name',
        'customer_phone',
        'customer_email',
        'description',
        'register_date',
        'expiry_date',
        'is_active',
        'license_category_id',
    ];

    public function category() {
        return $this->belongsTo(LicenseCategory::class, 'license_category_id');
    }
}
