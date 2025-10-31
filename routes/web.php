<?php

use App\Http\Controllers\ProductsController;

Route::get('/', fn() => redirect()->route('products.index'));

Route::resource('products', ProductsController::class);