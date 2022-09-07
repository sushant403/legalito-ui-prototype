<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::get('/product', [\App\Http\Controllers\RoutesController::class, 'product'])->name('product');
