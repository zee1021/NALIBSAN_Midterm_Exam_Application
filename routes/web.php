<?php

use App\Http\Controllers\ProductController;

Route::get('/shop', [ProductController::class, 'index']) -> name('shop.index');