<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

/*
Route::resource('jenjang', 'JenjangController');
Route::resource('jurusan', 'JurusanController');
Route::resource('namajurusan', 'NamaJurusanController');
Route::resource('tahunakademik', 'TahunAkademikController');
Route::resource('user', 'UserController');
Route::resource('matakuliah', 'MatakuliahController');
Route::resource('kurikulum', 'KurikulumController');
Route::resource('kelompokmatakuliah', 'KelompokMatakuliahController');
Route::resource('kompetensi', 'KompetensiController');
Route::resource('kurikulummatakuliah', 'KurikulumMatakuliahController');
*/
