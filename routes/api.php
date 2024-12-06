<?php

use App\Http\Controllers\Api\LicenseController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    // Route để lấy danh sách tất cả License
    Route::get('/licenses', [LicenseController::class, 'index']);

    // Route để lấy License theo ID
    Route::get('/license/{license_key}', [LicenseController::class, 'show']);
});

