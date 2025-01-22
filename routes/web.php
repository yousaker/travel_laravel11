<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TahwissaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReservationTahwissaController;
use App\Http\Controllers\ReservationProduitController;
use App\Http\Controllers\DashboardController;


// Page d'accueil publique (sans middleware)
Route::get('/', [TahwissaController::class, 'welcome'])->name('welcome');

Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'ar'])) {
        abort(400);
    }
    session()->put('locale', $locale);
    return redirect()->back();
})->name('lang.switch');
Route::get('/dashboard', [TahwissaController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/tahwissa', [TahwissaController::class, 'show'])->name('tahwissa.show');
Route::get('/load-more-tahwiss', [TahwissaController::class, 'loadMore'])->name('load.more.tahwiss');
Route::post('/dashboard', [TahwissaController::class, 'store'])->name('dashboard.store');

// Page welcome protégée (si nécessaire)
Route::get('/welcome', [TahwissaController::class, 'welcome'])
    ->middleware(['auth', 'verified'])
    ->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/product', [ProductController::class, 'show'])->name('product.show');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/load-more-products', [ProductController::class, 'loadMoreProducts'])->name('load.more.products');


Route::post('/reservations', [ReservationTahwissaController::class, 'store'])
    ->name('reservations.store');

Route::post('/reservation', [ReservationProduitController::class, 'store'])->name('reservationProduite.store');

Route::get('/dashboardAdmin', [DashboardController::class, 'index'])->name('dashboard.index');



require __DIR__.'/auth.php';
