<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtGalleryController;

// Route for the homepage (featured artists and art)
Route::get('/', [ArtGalleryController::class, 'featured'])->name('featured');

// Route for the archive page (older collections)
Route::get('/archive', [ArtGalleryController::class, 'archive'])->name('archive');
