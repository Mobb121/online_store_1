<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/category', function () {
    return view('pages.category');
});


Route::get('/product', function () {
    return view('pages.product');
});

Route::get('/cart', function () {
    return view('pages.cart');
});
