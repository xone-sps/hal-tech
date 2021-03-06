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

Route::get('/', 'HomeController@index')->name('get.home.index');
Route::get('/web', 'HomeController@index')->name('get.home.web');
Route::get('/windows', 'HomeController@index')->name('get.home.windows');
Route::get('/mobileapp', 'HomeController@index')->name('get.home.mobileapp');
Route::get('/maintenance', 'HomeController@index')->name('get.home.maintenance');
Route::get('/graphic', 'HomeController@index')->name('get.home.graphic');
Route::get('/consult', 'HomeController@index')->name('get.home.consult');
Route::get('/portfolio', 'HomeController@index')->name('get.home.portfolio');
Route::get('/customer', 'HomeController@index')->name('get.home.customer');
Route::get('/community', 'HomeController@index')->name('get.home.community');
Route::get('/community/read/{id}', 'HomeController@index')->name('get.home.community.read');


// Login and Logout
Route::get('/admin/login', 'Auth\LoginController@getLogin')->name('getlogin');
Route::post('/admin/login', 'Auth\LoginController@login')->name('login');
Route::get('admin/logout', 'Auth\LoginController@logout')->name('logout');
// End login and Logout

Route::group(['prefix' => '/admin/gg'], function () {
    Route::get('/', 'AdminController@dashboard');
    Route::get('/addblog', 'AdminController@addblog')->name('addblog');
    Route::post('/postblog', 'AdminController@postblog')->name('postblog');
    Route::get('/allblog', 'AdminController@allblog')->name('allblog');
    Route::get('/update/{id}', 'AdminController@getUpdate')->name('getUpdate');
    Route::post('/update/{id}', 'AdminController@storeUpdate')->name('store.update');
    Route::delete('/delete/{id}', 'AdminController@postDelete')->name('delete');
});
