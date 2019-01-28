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

Route::group(['prefix' => 'data'],function(){
	Route::get('menu','DataController@index');
    Route::get('listar','DataController@listar');
    Route::get('crear','DataController@crear');
    Route::post('registrar','DataController@registrar');
});

