<?php

use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Merk;
use App\Models\Product;
use App\Models\User;
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
        $user = User::all()->count();
        $merk = Merk::all()->count();
        $product = Product::all()->count();
        return view('dashboard.index', [
            'user' => $user,
            'merk' => $merk,
            'product' => $product,
        ]);
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
    $merks = Merk::all()->sortBy('name')->take(4);
    $products = Product::all()->sortBy('name')->take(4);

    return view('landing.home', [
        'merks' => $merks,
        'products' => $products,
    ]);
})->name('landing.home');

Route::get('/merk', function() {
    $merks = Merk::all();

    return view('landing.merks.index', [
        'merks' => $merks,
    ]);
})->name('landing.merks.index');



Route::get('/merk/{merk}', function(Merk $merk) {
    return view('landing.merks.detail', [
        'merk' => $merk,
    ]);
})->name('landing.merks.detail');

Route::get('/daftar-produk', function() {
    $products = Product::all();
    return view('landing.products', [
        'products' => $products,
    ]);
})->name('landing.products');

Route::get('/tentang-kami', function() {
    return view('landing.about');
})->name('landing.about');

Route::get('/jasa', function() {
    return view('landing.services');
})->name('landing.services');