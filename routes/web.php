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

Route::get('/', function () { return view('index');});
Route::get('/home', 'HomeController@index');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

//resetPassword


Route::group(['prefix' => 'password'],function()
{
    Route::get('request', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('email', 'Auth\ForgotPasswordController@email')->name('password.email');
    Route::post('update', 'Auth\ForgotPasswordController@update');
});


//Users

Route::group(['prefix' => 'user'],function()
{
    Route::get('welcome','UsersController@welcome');
    Route::get('list','UsersController@list');
    Route::get('profile','UsersController@profile');
    Route::get('update',"UsersController@update");
    Route::post('updatePost',"UsersController@updatePost");
    Route::post('updateProfile',"UsersController@updateProfile");
    Route::get('changeStatus','UsersController@changeStatus');
});


Route::group(['prefix' => 'campaign'],function()
{
	Route::get('list','CampaingController@list');
	Route::get('create','CampaingController@create');
	Route::post('store','CampaingController@store');
    Route::get('update','CampaingController@update');
    Route::post('updatePost','CampaingController@updatePost');
    Route::get('changeStatus','CampaingController@changeStatus');
});

Route::group(['prefix' => 'fedex'],function()
{
    Route::get('template','FedexController@template');
    Route::post('darAgent','FedexController@darAgent');
    Route::post('store','FedexController@store');
    Route::get('rawdata','FedexController@rawdata');
});


        

