<?php

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

// Kiểm tra ảnh có tồn tại trong hệ thống không
if (!function_exists('get_image_url')) {
    function get_image_url ($path, $default)
    {
        // Kiểm tra nếu $path là URL
        if (filter_var($path, FILTER_VALIDATE_URL)) {
            return $path;
        }

        // Kiểm tra ảnh trong thư mục storage
        if ($path && Storage::disk('public')->exists($path)) {
            return asset('storage/' . $path);
        }

        // Trả về ảnh mặc định
        return asset($default);
    }
}

// Giới hạn chữ mô tả bài viết, sản phẩm
if (!function_exists('limit_text')) {
    function limit_text($text, $limit = 130, $end = ' ...'): string
    {
        // Loại bỏ thẻ HTML và thay thế &nbsp; bằng khoảng trắng
        $text = str_replace('&nbsp;', ' ', strip_tags($text));
        $text = str_replace('&amp;', '&', strip_tags($text));

        return Str::limit($text, $limit, $end);
    }
}

// Định dạng giá tiền Việt Nam
if (!function_exists('format_price_vnd')) {
    function format_price_vnd($price, $after_price= 'đ'): string
    {
        return number_format($price, 0, ',', '.').$after_price;
    }
}
