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

Route::get('/test', function () {
    return view('test');
});

Route::get('/regis',function(){
    return view('registrasi');
});

Route::get('/regis_tu',function(){
    return view('registrasi_tu');
});

Route::get('/regis_tu2',function(){
    return view('layout_tu');
});

Route::resource('tu','TuController');
Route::resource('siswa', 'SiswaController');
Route::resource('wali', 'WaliController');
