<?php

use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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



Route::get('/', [CatalogueController::class, 'index']);
Route::get('/{product_slug}', [CatalogueController::class, 'show'])->name('catalogue.detail');