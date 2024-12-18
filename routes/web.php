<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::Post('/products',[ProductController::class,'store'])->name('products.store');
