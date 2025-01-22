<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TahwissaController;
<<<<<<< HEAD
use App\Http\Controllers\ProductController;
=======

>>>>>>> fe1a1c2c2534ebdb1e2a6b0ab63fa87ec0b09e5d

// Page d'accueil publique (sans middleware)
Route::get('/', [TahwissaController::class, 'welcome'])->name('welcome');


<<<<<<< HEAD
Route::get('/dashboard', [TahwissaController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



// Page welcome protégée (si nécessaire)
Route::get('/welcome', [TahwissaController::class, 'welcome'])
    ->middleware(['auth', 'verified'])
    ->name('welcome');
=======

Route::get('/dashboard', function () {
    $categories = \App\Models\Category::all();
    return view('dashboard', compact('categories'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');
>>>>>>> fe1a1c2c2534ebdb1e2a6b0ab63fa87ec0b09e5d

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/dashboard', [TahwissaController::class, 'store'])->name('dashboard.store');
<<<<<<< HEAD
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
=======
>>>>>>> fe1a1c2c2534ebdb1e2a6b0ab63fa87ec0b09e5d
require __DIR__.'/auth.php';
