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
Route::get('/test-guru' , function(){
    return view('test-guru');
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

Route::prefix('/guru')->group(function(){
    Route::resource('/nilai', 'NilaiController');
    Route::get('/list-kelas/{id}','NilaiController@list_kelas');
    Route::get('/list-siswa/{id}/{id_kelas}','NilaiController@list_siswa');
    Route::get('/siswa/{id}/{id_kelas}/{id_siswa}','NilaiController@siswa');
    Route::post('/kkm/{id}' , 'GuruController@kkm');
    Route::resource('/tipe-nilai', 'TipeNilaiController');
    Route::post('/tipe-nilai-update','TipeNilaiController@updateDetailTipe');
    Route::post('/nilai-siswa/{id}/{id_siswa}/{id_kelas}','DetailNilaiController@nilai');
});
