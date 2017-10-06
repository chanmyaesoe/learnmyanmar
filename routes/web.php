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
Route::group(['namespace' => 'Admin','prefix' => 'admin'], function()
{
    Route::resource('cityinfo', 'CityInfo\CityInfoController');
	Route::get('cityinfoData', 'CityInfo\CityInfoController@anyData');

	Route::resource('slides', 'Slides\SlidesController');
	Route::get('slidesData', 'Slides\SlidesController@anyData');

	Route::resource('divisionorstate', 'DivisionorState\DivisionorStateController');
	Route::get('divisionorstateData', 'DivisionorState\DivisionorStateController@anyData');

	Route::resource('famousplaces', 'FamousPlaces\FamousPlaceController');
	Route::get('famousplacesData', 'FamousPlaces\FamousPlaceController@anyData');

});
Route::group(['namespace' => 'Frontend'], function()
{
    Route::get('/', 'FrontHomeController@index');
    Route::get('/citydetail/{id}', 'CityDetailController@showdetail')->name('citydetail');
});
Route::get('/clear', function() {
    // $exitCode = Artisan::call('cache:clear');
    Cache::flush();
    return "already cleared cache";
});
