<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::get('/product', [\App\Http\Controllers\RoutesController::class, 'product'])->name('product');
Route::get('/contact', [\App\Http\Controllers\RoutesController::class, 'contact'])->name('contactUs');
