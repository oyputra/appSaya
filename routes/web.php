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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mahasiswa', function(){
	return '<h1><center>ini halaman mahasiswa</center></h1>';
});

Route::get('/prodi', ['middleware' => 'auth' ,'uses' => 'ProdiController@index']);
Route::get('/prodi/new', ['middleware' => 'auth' ,'uses' => 'ProdiController@create']);
Route::post('/prodi/new', ['middleware' => 'auth' ,'uses' => 'ProdiController@store']); 
Route::get('/prodi/edit/{id}', ['middleware' => 'auth' ,'uses' => 'ProdiController@edit']);
Route::post('/prodi/edit/{id}', ['middleware' => 'auth' ,'uses' => 'ProdiController@update']);
Route::delete('/prodi/delete/{id}', ['middleware' => 'auth' ,'uses' => 'ProdiController@destroy']);

Route::get('/mahasiswa', ['middleware' => 'auth' ,'uses' => 'MahasiswaController@index']);
Route::get('/mahasiswa/new', ['middleware' => 'auth' ,'uses' => 'MahasiswaController@create']);
Route::post('/mahasiswa/new', ['middleware' => 'auth' ,'uses' => 'MahasiswaController@store']);
Route::get('/mahasiswa/edit/{id}', ['middleware' => 'auth' ,'uses' => 'MahasiswaController@edit']);
Route::post('/mahasiswa/edit/{id}', ['middleware' => 'auth' ,'uses' => 'MahasiswaController@update']);
Route::delete('/mahasiswa/delete/{id}', ['middleware' => 'auth' ,'uses' => 'MahasiswaController@destroy']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
