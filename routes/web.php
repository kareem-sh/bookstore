<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
   
});

Route::get('/',[GalleryController::class,'index'])->name('gallery.index');
Route::get('/search',[GalleryController::class,'search'])->name('search');