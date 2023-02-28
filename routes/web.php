<?php

use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Merk;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function() {
    Route::get('/', function() {
        return view('dashboard.index');
    })->name('dashboard');

    Route::resource('users', UserController::class)
        ->except(['show', 'edit', 'update']);
    Route::resource('products', ProductController::class)->except('show');
    Route::resource('merks', MerkController::class)->except('show');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/', function() {
    $merks = Merk::all();

    return view('landing.home', [
        'merks' => $merks,
    ]);
})->name('landing.home');

Route::get('/merk', function() {
    return view('landing.merks');
})->name('landing.merks');

Route::get('/daftar-produk', function() {
    return view('landing.products');
})->name('landing.products');

Route::get('/tentang-kami', function() {
    return view('landing.about');
})->name('landing.about');

Route::get('/jasa', function() {
    return view('landing.services');
})->name('landing.services');