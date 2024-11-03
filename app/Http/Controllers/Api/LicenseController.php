<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\License;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class LicenseController extends Controller
{
    // Phương thức để lấy danh sách các License
    public function index(): JsonResponse
    {
        // Lấy tất cả License
        $licenses = License::all();

        // Trả về dữ liệu dưới dạng JSON
        return response()->json($licenses);
    }

    // Phương thức để lấy License theo ID
    public function show($license_key): JsonResponse
    {
        // Tìm License theo license_key
        $license = License::where('license_key', $license_key)->first();

        // Nếu không tìm thấy, trả về lỗi 404
        if (!$license) {
            return response()->json(['message' => 'License not found'], 404);
        }

        // Trả về License dưới dạng JSON
        return response()->json($license);
    }
}
