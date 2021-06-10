<?php


// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

Route::get('/', function () {
    return view('welcome');
});

//カリキュラム13で修正したので元のやつコメント化0611
// Route::group(['prefix' => 'admin'], function() {
//     Route::get('news/create', 'Admin\NewsController@add');
// });


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('news/create', 'Admin\NewsController@add');
     Route::post('news/create', 'Admin\NewsController@create'); # 追記
});

/*課題3*/

Route::get('XXX', 'Admin\AAAController@BBB');

/*課題4*/
//カリキュラム13で修正したので元のやつコメント化0611
//Route::get('admin/profile/create','Admin\ProfileController@add');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
Route::get('profile/create','Admin\ProfileController@add');
Route::post('profile/create', 'Admin\ProfileController@create');
});


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
Route::get('profile/edit','Admin\ProfileController@edit');
Route::post('profile/edit', 'Admin\ProfileController@edit');

// /*
//      またはgroup化して以下のコードです。
//     Route::group(['prefix'=>'admin'],function(){
//     Route:get('profile/create','Admin\ProfileController@add');
//     Route:get('profile/edit','Admin\ProfileController@edit');
// });
// */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
    Route::get('profile/create', 'Admin\NewsController@add')->middleware('auth');
    Route::get('profile/edit', 'Admin\NewsController@add')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
});