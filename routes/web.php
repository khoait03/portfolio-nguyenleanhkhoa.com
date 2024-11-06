<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\ProjectController;


Route::get('/san-pham', [ProductController::class, 'index'])->name('product.index');
Route::get('/san-pham/{slug}', [ProductController::class, 'detail'])->name('product.detail');

Route::get('/danh-muc/{slug}', [ProductController::class, 'product_by_category'])->name('product.product-by-category');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dich-vu', [HomeController::class, 'service'])->name('service');
Route::get('/lien-he', [HomeController::class, 'contact'])->name('contact');

Route::get('/du-an', [ProjectController::class, 'index'])->name('project');
Route::get('/du-an/{slug}.html', [ProjectController::class, 'detail'])->name('project.detail');

Route::get('/bai-viet', [HomeController::class, 'blog'])->name('blog');
