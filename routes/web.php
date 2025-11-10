<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



// Admin Routes
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    // Posts
    Route::resource('posts', PostController::class);
    // Categories
    Route::resource('categories', CategoryController::class);
});

// Public Routes
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/{post:slug}', [PostController::class, 'show'])->name('posts.show');

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
