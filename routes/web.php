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

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});

/*課題3*/

Route::get('XXX', 'Admin\AAAController@BBB');

/*課題4*/
Route::get('admin/profile/create','Admin\ProfileController@add');

Route::get('admin/profile/edit','Admin\ProfileController@edit');

/*
     またはgroup化して以下のコードです。
    Route::group(['prefix'=>'admin'],function(){
    Route:get('profile/create','Admin\ProfileController@add');
    Route:get('profile/edit','Admin\ProfileController@edit');
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
    Route::get('profile/create', 'Admin\NewsController@add')->middleware('auth');
    Route::get('profile/edit', 'Admin\NewsController@add')->middleware('auth');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
