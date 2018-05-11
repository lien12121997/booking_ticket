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

Route::get('home', 'HomeController@index');
Route::get('item/{id}', 'HomeController@item');
Route::get('booking/{id}', 'HomeController@booking');
Route::post('booking', 'HomeController@postInsertBooking')->name('booking');
Route::get('contact', 'HomeController@getContact');
Route::post('contact', 'HomeController@postContact');


Route::get('user/register', 'Auth\LoginController@getRegister');
Route::post('user/register', 'Auth\LoginController@postRegister');
Route::get('user/login', 'Auth\LoginController@getLogin');
Route::post('user/login', 'Auth\LoginController@postLogin');
Route::get('user/logout', 'Auth\LoginController@logout');


Route::get('profile/{id}','HomeController@user');
Route::get('updateUser/{id}','HomeController@getUpdateUser');
Route::post('updateUser/{id}','HomeController@postUpdateUser');
Route::get('updatePass/{id}','HomeController@getUpdatePass');
Route::post('updatePass/{id}','HomeController@postUpdatePass');



Route::group(['prefix'=>'cachieu'],function(){
		Route::get('list','cachieuController@getList');
		Route::get('insert','cachieuController@getInsert');
		Route::post('insert','cachieuController@postInsert');
		Route::get('update/{id}','cachieuController@getUpdate');
		Route::post('update/{id}','cachieuController@postUpdate');
		Route::get('delete/{id}','cachieuController@getDelete');
	});
Route::group(['prefix'=>'chatluong'],function(){
		Route::get('list','chatluongController@getList');
		Route::get('insert','chatluongController@getInsert');
		Route::post('insert','chatluongController@postInsert');
		Route::get('update/{id}','chatluongController@getUpdate');
		Route::post('update/{id}','chatluongController@postUpdate');
		Route::get('delete/{id}','chatluongController@getDelete');
	});
Route::group(['prefix'=>'ghe'],function(){
		Route::get('list','gheController@getList');
		Route::get('insert','gheController@getInsert');
		Route::post('insert','gheController@postInsert');
		Route::get('update/{id}','gheController@getUpdate');
		Route::post('update/{id}','gheController@postUpdate');
		Route::get('delete/{id}','gheController@getDelete');
	});
Route::group(['prefix'=>'lichchieu'],function(){
		Route::get('list','lichchieuController@getList');
		Route::get('insert','lichchieuController@getInsert');
		Route::post('insert','lichchieuController@postInsert');
		Route::get('update/{id}','lichchieuController@getUpdate');
		Route::post('update/{id}','lichchieuController@postUpdate');
		Route::get('delete/{id}','lichchieuController@getDelete');
	});
Route::group(['prefix'=>'loaitin'],function(){
		Route::get('list','loaitinController@getList');
		Route::get('insert','loaitinController@getInsert');
		Route::post('insert','loaitinController@postInsert');
		Route::get('update/{id}','loaitinController@getUpdate');
		Route::post('update/{id}','loaitinController@postUpdate');
		Route::get('delete/{id}','loaitinController@getDelete');
	});
Route::group(['prefix'=>'luatuoi'],function(){
		Route::get('list','luatuoiController@getList');
		Route::get('insert','luatuoiController@getInsert');
		Route::post('insert','luatuoiController@postInsert');
		Route::get('update/{id}','luatuoiController@getUpdate');
		Route::post('update/{id}','luatuoiController@postUpdate');
		Route::get('delete/{id}','luatuoiController@getDelete');
	});
Route::group(['prefix'=>'pcct'],function(){
		Route::get('list','pcctController@getList');
		Route::get('insert','pcctController@getInsert');
		Route::post('insert','pcctController@postInsert');
		Route::get('update/{id}','pcctController@getUpdate');
		Route::post('update/{id}','pcctController@postUpdate');
		Route::get('delete/{id}','pcctController@getDelete');
	});
Route::group(['prefix'=>'phim'],function(){
		Route::get('list','phimController@getList');
		Route::get('insert','phimController@getInsert');
		Route::post('insert','phimController@postInsert');
		Route::get('update/{id}','phimController@getUpdate');
		Route::post('update/{id}','phimController@postUpdate');
		Route::get('delete/{id}','phimController@getDelete');
	});
Route::group(['prefix'=>'phongchieu'],function(){
		Route::get('list','phongchieuController@getList');
		Route::get('insert','phongchieuController@getInsert');
		Route::post('insert','phongchieuController@postInsert');
		Route::get('update/{id}','phongchieuController@getUpdate');
		Route::post('update/{id}','phongchieuController@postUpdate');
		Route::get('delete/{id}','phongchieuController@getDelete');
	});
Route::group(['prefix'=>'theloai'],function(){
		Route::get('list','theloaiController@getList');
		Route::get('insert','theloaiController@getInsert');
		Route::post('insert','theloaiController@postInsert');
		Route::get('update/{id}','theloaiController@getUpdate');
		Route::post('update/{id}','theloaiController@postUpdate');
		Route::get('delete/{id}','theloaiController@getDelete');
	});
Route::group(['prefix'=>'tintuc'],function(){
		Route::get('list','tintucController@getList');
		Route::get('insert','tintucController@getInsert');
		Route::post('insert','tintucController@postInsert');
		Route::get('update/{id}','tintucController@getUpdate');
		Route::post('update/{id}','tintucController@postUpdate');
		Route::get('delete/{id}','tintucController@getDelete');
	});
Route::group(['prefix'=>'ve'],function(){
		Route::get('list','veController@getList');
	});
Route::group(['prefix'=>'vct'],function(){
		Route::get('list','vctController@getList');
	});

Auth::routes();


