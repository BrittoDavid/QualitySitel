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


//Campaign 
Route::group(['prefix' => 'campaign'],function()
{
	Route::get('list','CampaingController@list');
	Route::get('create','CampaingController@create');
	Route::post('store','CampaingController@store');
    Route::get('update','CampaingController@update');
    Route::post('updatePost','CampaingController@updatePost');
    Route::get('changeStatus','CampaingController@changeStatus');
});

//Fedex
Route::group(['prefix' => 'fedex'],function()
{   
    //Tier 1
    Route::get('template','FedexController@template');
    Route::post('darAgent','FedexController@darAgent');
    Route::post('store','FedexController@store');
    Route::get('rawdata','FedexController@rawdata');
    Route::get('reporting','FedexController@reporting');
    Route::get('qualityPerformance','FedexController@qualityPerformance');
});

//Adp
Route::group(['prefix' => 'adp'],function()
{   
    //Tracker
    Route::get('viewTracker','AdpController@viewTracker');
    Route::post('registerTracker','AdpController@registerTracker');
    Route::get('rawdataTracker','AdpController@rawdataTracker');
    Route::get('updateTracker','AdpController@updateTracker');
    Route::post('updateTrackerPost','AdpController@updateTrackerPost');
    Route::post('deleteTracker','AdpController@deleteTracker');
    //Tier 1
    Route::get('templateTier1','AdpController@templateTier1');
    //Tier 2
    Route::get('templateTier2','AdpController@templateTier2');
    Route::post('storeTier2','AdpController@storeTier2');
    Route::post('darAgent','AdpController@darAgent');

});

//Oportun
Route::group(['prefix' => 'oportun'],function()
{
    Route::get('templateTelesales','OportunController@templateTelesales');
});
        

