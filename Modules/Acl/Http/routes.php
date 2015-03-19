<?php

Route::group(['prefix' => 'acl', 'namespace' => 'Modules\Acl\Http\Controllers'], function()
{
	Route::get('/', 'AclController@index');
});