<?php

use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\UserController;
use App\Models\Merk;
use App\Models\Product;
use App\Models\Social;
use App\Models\User;
use App\Models\Contact;
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
    Route::resource('socials', SocialController::class)->except('show');
    Route::resource('contacts', ContactController::class)->except('show');
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
    $socials  = Social::all();
    $contacts = Contact::all();

    return view('landing.home', [
        'merks' => $merks,
        'products' => $products,
        'socials' => $socials,
        'contacts' => $contacts,
    ]);
})->name('landing.home');

Route::get('/merk', function() {
    $merks = Merk::all();
    $socials  = Social::all();
    $contacts = Contact::all();

    return view('landing.merks.index', [
        'merks' => $merks,
        'socials' => $socials,
        'contacts' => $contacts,
    ]);
})->name('landing.merks.index');



Route::get('/merk/{merk}', function(Merk $merk) {
    $socials  = Social::all();
    $contacts = Contact::all();
    return view('landing.merks.detail', [
        'merk' => $merk,
        'socials' => $socials,
        'contacts' => $contacts,
    ]);
})->name('landing.merks.detail');

Route::get('/daftar-produk', function() {
    $socials  = Social::all();
    $contacts = Contact::all();
    $products = Product::all();
    return view('landing.products', [
        'products' => $products,
        'socials' => $socials,
        'contacts' => $contacts,
    ]);
})->name('landing.products');

Route::get('/tentang-kami', function() {
    $socials  = Social::all();
    $contacts = Contact::all();
    return view('landing.about', [
        'socials' => $socials,
        'contacts' => $contacts,
    ]);
})->name('landing.about');

Route::get('/jasa', function() {
    $socials  = Social::all();
    $contacts = Contact::all();
    return view('landing.services',[
        'socials' => $socials,
        'contacts' => $contacts,
    ]);
})->name('landing.services');