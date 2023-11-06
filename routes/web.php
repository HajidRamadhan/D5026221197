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
Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('show', 'App\Http\Controllers\DosenController@showBlog');
