<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProductController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/category/{slug}', [ProductController::class, 'product_by_category'])->name('product.product-by-category');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/project', [HomeController::class, 'project'])->name('project');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
