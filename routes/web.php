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
Route::get('/sembarang', function () {
    return view('hellopertemuan1');
});
Route::get('/link', function () {
    return view('link1');
});
Route::get('/news', function () {
    return view('news1');
});
Route::get('/stye', function () {
    return view('style1');
});
Route::get('/kedua', function () {
    return view('2');
});
Route::get('/keduapertama', function () {
    return view('berita2');
});
Route::get('/keduakedua', function () {
    return view('link2');
});
Route::get('/keduaketiga', function () {
    return view('news2');
});
Route::get('/keduakeempat', function () {
    return view('style2');
});
Route::get('/ketiga', function () {
    return view('responsive3');
});
Route::get('/kelimasatu', function () {
    return view('js5');
});
Route::get('/kelimadua', function () {
    return view('js52');
});
Route::get('/kelimatiga', function () {
    return view('validasi5');
});
Route::get('/keempat', function () {
    return view('latihan4');
});
Route::get('/ETS', function () {
    return view('indexets');
});
Route::get('/Linktree', function () {
    return view('indexlatihan');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/Kontak', function () {
    return view('Kontak');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('show', 'App\Http\Controllers\DosenController@showBlog');
//Route::get('/pegawai/{nama}', 'App\Http\Controllers\DosenController@shownama');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');
Route::get('/formulir','App\Http\Controllers\DosenController@formulir');

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@Kontak');

Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');


Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@indexnilaikuliah');
Route::get('/nilaikuliah/tambahdata','App\Http\Controllers\NilaiKuliahController@tambahdata');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');

Route::get('/obat','App\Http\Controllers\obatController@index4');
Route::get('/obat/tambah4','App\Http\Controllers\obatController@tambah4');
Route::post('/obat/store','App\Http\Controllers\obatController@store');


Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@indexbelanja');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');
