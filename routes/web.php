<?php

use Illuminate\Support\Facades\Route;
//import Controller
use App\Http\Controllers\MyController;
use App\Http\Controllers\BackendController;
use App\Http\Middleware\Admin;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;

Route::get('/', function () {
    return view('welcome');
});

//route basic 
Route::get('about', function () {
    return 'ini halaman about';
});


Route::get('profile', function(){
    return view('profile');
});

//Route Parameters
Route::get('produk/{namaProduk}',function($p){
    return 'saya Membeli' . $p;
});

Route::get('kategori/{namaKategori}', function($kategori){
    return view('kategori', compact('kategori'));
});

//Route optional parameters

Route::get('search/{keyword?}', function($key = null){
    return view('search', compact('key'));
});

Route::get('toko/{barang?}/{kode?}', function ($barang = null,$kode = null) {
    return view('toko', compact('barang','kode'));
});
//route buku
Route::get('buku', [MyController::class, 'index']);
// tambah buku
Route::get('buku/create', [MyController::class, 'create']);
Route::post('buku', [MyController::class, 'store']);
// show
Route::get('buku/{id}', [MyController::class, 'show']);
//edit & update
Route::get('buku/{id}/edit', [MyController::class, 'edit']);
Route::put('buku/{id}', [MyController::class, 'update']);
//delete
Route::delete('buku/{id}', [MyController::class, 'destroy']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route untuk admin /backend
Route::group(['prefix'=>'admin', 'middleware'=>['auth',Admin::class]] ,function(){
    Route::get('/', [BackendController::class,'index']);
    //crud
    Route::resource('/category',CategoryController::class);
    Route::resource('/product', ProductController::class);

});