<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
});


Route::get('/backend', function () {
    return view('backend.index');
})->middleware(['auth', 'verified'])->name('backend.index');

/*Route::get('/backend/posts', function () {
    return view('backend.posts.index');
})->middleware(['auth', 'verified'])->name('backend.posts.index');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/backend/posts', PostController::class)->middleware(['auth','verified']);



require __DIR__.'/auth.php';
