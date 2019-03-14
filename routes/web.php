<?php

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

Route::get('kategori', function () {
    return "hello user with id";
});
Route::resource('category','kategoriController');
Route::get('/lihatdata','crud@index')->name('lihatdata');
Route::get('tambahdata','kategoriController@addform');
Route::post('tambahkategori','kategoriController@store');
Route::get('hapusKategori/{id}','kategoriController@destroy');
Route::get('editKategori/{id}','kategoriController@editform');
Route::post('updateKategori/{id}','kategoriController@update');

Route::get('master', function () {
    return view('layouts.master');
});

Route::get('sidebar', function () {
    return view('layouts.sidebar');
});

Route::get('dashboard', function () {
    return view('dashboard.index');
});

Route::get('dashboard2', function () {
    return view('dashboard.dashboard');
});


