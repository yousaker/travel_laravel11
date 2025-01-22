<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TahwissaController;
use App\Http\Controllers\ProductController;

// Page d'accueil publique (sans middleware)
Route::get('/', [TahwissaController::class, 'welcome'])->name('welcome');


Route::get('/dashboard', [TahwissaController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



// Page welcome protégée (si nécessaire)
Route::get('/welcome', [TahwissaController::class, 'welcome'])
    ->middleware(['auth', 'verified'])
    ->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/dashboard', [TahwissaController::class, 'store'])->name('dashboard.store');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
require __DIR__.'/auth.php';
