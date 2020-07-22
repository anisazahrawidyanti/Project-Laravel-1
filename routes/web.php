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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function(){
    return "Hello Siswa RPL TB";
});
Route::get('/artikel/{judul}', function($nama){
    return "Menampilkan Judul Artikel $nama";
});
Route::get('/kategori/{kategori}/{judul}', function($kategori,$judul){
    return "Kategori : $kategori , Judul : $judul";
});
Route::get('/siswa/{jurusan}/{nama}', function($jurusan,$nama){
    return "<h3>Jurusan : $jurusan</h3> <p>Nama : $nama</p>";
});
Route::get('/siswa/{nipd}', function($nipd){
    return "NIPD Siswa : $nipd";
})->where('nipd','[A-Z]{2}[0-9]+');
Route::fallback(function(){
    return "Maaf halaman tidak dapat ditemukan!";
});
//blog
Route::get('/profil', function(){
    return view('blog/menuprofil');
});
Route::get('/experience', function(){
    return view('blog/menuexperience');
});
Route::get('/portofolio', function(){
    return view('blog/menuportofolio');
});