<?php

use Illuminate\Support\Facades\Route;
$url = "App\Http\Controllers";

Route::get('/', function () {
    return view('home');
});

Route::get('product/{product:product_slug}', $url . "\productController@showProduct");


// Route::get('register', [RegisterController::class, 'index'])->name('/');
// Route::post('proses', [RegisterController::class, 'proses']);
