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

Route::get('/', 'HomeController@index')->name('get.home.index')->middleware('guest');
Route::get('/web', 'HomeController@index')->name('get.home.web')->middleware('guest');
Route::get('/windows', 'HomeController@index')->name('get.home.windows')->middleware('guest');
Route::get('/mobileapp', 'HomeController@index')->name('get.home.mobileapp')->middleware('guest');
Route::get('/maintenance', 'HomeController@index')->name('get.home.maintenance')->middleware('guest');
Route::get('/graphic', 'HomeController@index')->name('get.home.graphic')->middleware('guest');
Route::get('/consult', 'HomeController@index')->name('get.home.consult')->middleware('guest');
Route::get('/portfolio', 'HomeController@index')->name('get.home.portfolio')->middleware('guest');
Route::get('/customer', 'HomeController@index')->name('get.home.customer')->middleware('guest');


Route::group(['prefix' => '/admin'], function () {
    Route::get('/', 'AdminController@dashboard');
    Route::get('/addblog', 'AdminController@addblog')->name('addblog');
});
