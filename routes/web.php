<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Client\HomeController;

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/project', [HomeController::class, 'project'])->name('project');
