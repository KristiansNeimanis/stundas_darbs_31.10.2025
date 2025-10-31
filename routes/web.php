<?php

use App\Http\Controllers\ProductsController;

Route::resource('products', ProductsController::class);

// Quantity palielināšana
Route::post('/products/{product}/increment', [ProductsController::class, 'increment'])
    ->name('products.increment');

// Quantity samazināšana
Route::post('/products/{product}/decrement', [ProductsController::class, 'decrement'])
    ->name('products.decrement');
