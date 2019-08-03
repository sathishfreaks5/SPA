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

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');
/**
* Admin-Block-Management
*/
Route::group(['middleware' => 'auth','prefix' => 'admin/blocks'], function () {

	Route::get('logo-management', ['as' => 'admin.blocks.standard.logo', 
		'uses' => 'BlockController@logo']);
	Route::post('logo-management-store', 'BlockController@logo_store')->name('admin.blocks.standard.logo.store');
	

	Route::resources([
    	'banner-management' 	=> 'BannerController',
    	'promotion-management' 	=> 'PromotionController'
	]);

	//Route::get('banner-management', ['as' => 'admin.blocks.standard.banner',  'uses' => 'BlockController@banner']);  
	//Route::resource('banner-management','BannerController');
	//Route::resource('promotion-management', 'PromotionController');
});

/**
* Admin-Activity-Management
*/ 
Route::group(['middleware' => 'auth','prefix' => 'admin/activity'], function () {
	/*Route::get('promotion-management', ['as' => 'admin.blocks.activity.promotion', 
		'uses' => 'ActivityController@promotion']);*/
	Route::get('content-management', ['as' => 'admin.blocks.activity.content', 
		'uses' => 'ActivityController@content']);
	Route::get('clientele-management', ['as' => 'admin.blocks.activity.clientele', 
		'uses' => 'ActivityController@clientele']);

});

/**
* Admin-User-Management
*/ 
Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

 
