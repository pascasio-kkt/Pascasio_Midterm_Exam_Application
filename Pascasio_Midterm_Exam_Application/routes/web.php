<?php

use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'showProducts']);
