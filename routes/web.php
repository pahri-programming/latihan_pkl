<?php

use App\Http\Controllers\BackendController;
//import Controller
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FrontendController;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\Backend\OrderController as BackendOrderController;


use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layouts.frontend');
// });

// //route basic
// Route::get('about', function () {
//     return 'ini halaman about';
// });

// Route::get('profile', function(){
//     return view('profile');
// });

// //Route Parameters
// Route::get('produk/{namaProduk}',function($p){
//     return 'saya Membeli' . $p;
// });

// Route::get('kategori/{namaKategori}', function($kategori){
//     return view('kategori', compact('kategori'));
// });

// //Route optional parameters

// Route::get('search/{keyword?}', function($key = null){
//     return view('search', compact('key'));
// });

// Route::get('toko/{barang?}/{kode?}', function ($barang = null,$kode = null) {
//     return view('toko', compact('barang','kode'));
// });
// //route buku
// Route::get('buku', [MyController::class, 'index']);
// // tambah buku
// Route::get('buku/create', [MyController::class, 'create']);
// Route::post('buku', [MyController::class, 'store']);
// // show
// Route::get('buku/{id}', [MyController::class, 'show']);
// //edit & update
// Route::get('buku/{id}/edit', [MyController::class, 'edit']);
// Route::put('buku/{id}', [MyController::class, 'update']);
//delete
// Route::delete('buku/{id}', [MyController::class, 'destroy']);

//Route guest(tamu) / member
Route::get('/', [FrontendController::class, 'index']);
Route::get('/product', [FrontendController::class, 'product'])->name('product.index');
Route::get('/product/{product}', [FrontendController::class, 'singleProduct'])->name('product.show');
Route::get('/product/category/{slug}', [FrontendController::class, 'filterByCategory'])->name('product.filter');
Route::get('/seacrh', [FrontendController::class, 'search'])->name('product.search');
Route::get('/about', [FrontendController::class, 'about']);
// cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/add-to-cart/{product}', [CartController::class, 'addTocart'])->name('cart.add');
Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::put('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');
Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');

//order
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route untuk admin /backend
Route::group(['prefix' => 'admin', 'as' => 'backend.', 'middleware' => ['auth', Admin::class]], function () {
    Route::get('/', [BackendController::class, 'index']);
    //crud
    Route::resource('/category', CategoryController::class);
    Route::resource('/product', ProductController::class);
    Route::get('/orders', [BackendOrderController::class, 'index'])->name('order.index');
    Route::get('/orders/{id}', [BackendOrderController::class, 'show'])->name('order.show');

});
