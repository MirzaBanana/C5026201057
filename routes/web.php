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

use App\Http\Controllers\viewcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('volume', function () {
    return view('tugas4');
});

Route::get('formregis', function () {
    return view('praktikum2');
});

Route::get('etspweb', 'viewcontroller@showform');

Route::get('volphp', 'viewcontroller@showform');
