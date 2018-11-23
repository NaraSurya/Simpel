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
Route::post('/regis', 'RegistrasiController@siswa');
Route::prefix('/tu')->group(function(){
    Route::get('/validate-siswa-baru', 'RegistrasiController@view');
    Route::get('/biodata-siswa-baru/{id}','RegistrasiController@show');
    Route::resource('biodata_tu','TuController');
    Route::resource('/guru', 'GuruController');
    Route::get('/biodata-siswa-baru/{id}','RegistrasiController@show');
    Route::put('/verify-siswa-baru/{id}','RegistrasiController@verify');
    Route::resource('/siswa', 'SiswaController');

    
});
