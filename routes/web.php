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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('penghuni', 'PenghuniController'); //tambahkan baris ini

// Route::get('penghuni', 'PenghuniController@index');
// Route::get('penghuni/tambah', 'PenghuniController@create');
// Route::post('penghuni/simpan', 'PenghuniController@store');
// Route::get('penghuni/edit', 'PenghuniController@edit');
// Route::get('penghuni/update', 'PenghuniController@update');
// Route::get('penghuni/hapus', 'PenghuniController@update');
