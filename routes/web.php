<?php

use App\Http\Controllers\ProductController;

Route::get('/', fn() => redirect()->route('products.index'));

Route::resource('products', ProductController::class);