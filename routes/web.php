<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImageController;

Route::get('/', function () {
    return inertia('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::get('/dashboard', function () {
//     return inertia('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/', fn () => redirect()->route('product.index'))
//     ->name('home');

Route::get('/dashboard', fn () => redirect()->route('product.index'))
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/product', ProductController::class);

    Route::resource('/category', CategoryController::class);

    Route::delete('/delete-image/{media_item}', [ProductImageController::class, 'deleteImage'])
        ->name('image.delete');
});

require __DIR__ . '/auth.php';
