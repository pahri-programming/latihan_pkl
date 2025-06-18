<?php

use Illuminate\Support\Facades\Route;

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
