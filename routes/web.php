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

use App\Http\Controllers\ViewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('praktikum1', function () {
    return view('prak1web');
});

// Route::get('tugas4', function () {
//     return view('tugas4');
// });

Route::get('praktikum2', 'ViewController@showform');


Route::get('tugas4', 'ViewController@tugas4');
Route::get('ets', 'ViewController@ets');

Route::get('php', 'ViewController@php');
Route::post('hasil', 'ViewController@hasilHitung');

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

//route CRUD tugas
Route::get('/pendapatan','PendapatanController@index');
Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');
Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');
Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');

Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route CRUD Praktikum
Route::get('/bedak','BedakController@index');
Route::get('/bedak/tambah','BedakController@tambah');
Route::post('/bedak/store','BedakController@store');
Route::get('/bedak/edit/{id}','BedakController@edit');
Route::post('/bedak/update','BedakController@update');
Route::get('/bedak/hapus/{id}','BedakController@hapus');
Route::get('/bedak/cari','BedakController@cari');
Route::get('/bedak/detail/{id}','BedakController@view');
