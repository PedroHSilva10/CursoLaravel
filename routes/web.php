<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::resource('products',ProductController::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('/product/{slug}',[SiteController::class, 'details'])->name('site.details');