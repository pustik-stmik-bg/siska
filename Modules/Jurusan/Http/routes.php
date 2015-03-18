<?php

Route::group(['prefix' => 'jurusan', 'namespace' => 'Modules\Jurusan\Http\Controllers'], function()
{
	Route::get('/', 'JurusanController@index');

	Route::get('/tahun_akademik', 'TahunAkademikController@index');
});
