<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


// Admin Routes
Route::prefix('admin')->middleware(['auth', 'verified'])->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Posts
    Route::resource('posts', \App\Http\Controllers\Admin\PostController::class)->except(['show']);
    
    // Categories
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class)->except(['show']);
});

// Public Routes
Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get('/{post:slug}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

// Auth Routes
require __DIR__.'/auth.php';

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
