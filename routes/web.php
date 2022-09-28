<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [\App\Http\Controllers\DashboardController::class,'index']);
    Route::resource('kategori',\App\Http\Controllers\KategoriController::class);
    Route::resource('produk',\App\Http\Controllers\ProdukController::class);
    Route::resource('customer',\App\Http\Controllers\CustomerController::class);
    Route::resource('transaksi',\App\Http\Controllers\TransaksiController::class);
    Route::get('profil',[\App\Http\Controllers\UserController::class,'index']);
    Route::get('setting',[\App\Http\Controllers\UserController::class,'setting']);
    Route::get('laporan',[\App\Http\Controllers\LaporanController::class,'index']);
    Route::get('proseslaporan',[\App\Http\Controllers\LaporanController::class,'proses']);
    Route::get('image', [\App\Http\Controllers\ImageController::class,'index']);
    Route::post('image', [\App\Http\Controllers\ImageController::class,'store']);
    Route::delete('image/{id}',[\App\Http\Controllers\ImageController::class,'destroy']);
    Route::post('imagekategori',[\App\Http\Controllers\KategoriController::class,'uploadimage']);
    Route::delete('imagekategori/{id}',[\App\Http\Controllers\KategoriController::class,'deleteimage']);
    Route::resource('slideshow',\App\Http\Controllers\SlideshowController::class);
    Route::resource('promo',\App\Http\Controllers\ProdukPromoController::class);
    Route::get('loadprodukasync/{id}',[\App\Http\Controllers\ProdukPromoController::class,'loadasync']);
    Route::resource('wishlist',\App\Http\Controllers\WishlistController::class);
    Route::resource('cart', App\Http\Controllers\CartController::class);
    Route::patch('kosongkan/{id}',[\App\Http\Controllers\CartController::class,'kosongkan']);
    Route::resource('cartdetail', App\Http\Controllers\CartDetailController::class);
    Route::get('checkout',[\App\Http\Controllers\CartController::class,'checkout']);


});
Route::get('/', [\App\Http\Controllers\HomepageController::class,'index']);
Route::get('/kategori', [\App\Http\Controllers\HomepageController::class,'kategori']);
Route::get('/kontak', [\App\Http\Controllers\HomepageController::class,'kontak']);
Route::get('/about', [\App\Http\Controllers\HomepageController::class,'about']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
