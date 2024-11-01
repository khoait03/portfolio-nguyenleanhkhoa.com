<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Client\HomeController;

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [HomeController::class, 'index']);
