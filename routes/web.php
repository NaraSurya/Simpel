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

Route::get('/regis','RegistrasiController@registrasi');



//<<<<<<< HEAD
Route::get('/regis_tu',function(){
    return view('registrasi_tu');
});

Route::get('/regis_tu2',function(){
    return view('layout_tu');
});

Route::resource('tu','TuController');
Route::resource('siswa', 'SiswaController');
Route::resource('wali', 'WaliController');
//=======
Route::post('/regis', 'RegistrasiController@siswa');

Route::prefix('/tu')->group(function(){
    Route::get('/validate-siswa-baru', 'RegistrasiController@view');
    Route::get('/list_guru', 'GuruController@list');
    Route::get('/biodata-siswa-baru/{id}','RegistrasiController@show');
    Route::get('/biodata_guru/{id}','GuruController@show');
    Route::post('/regisguru', 'GuruController@store');
    Route::get('/registrasi_guru', 'GuruController@create');
    Route::put('/verify-siswa-baru/{id}','RegistrasiController@verify');
    Route::resource('/siswa', 'SiswaController');
    
});
//>>>>>>> 966aa6fc11fc55e005840ceadb576444b0d60fbc
