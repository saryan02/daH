<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductController;

Route::get('/catalog', [CatalogController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::post('/product/{id}/review', [ProductController::class, 'storeReview']);
