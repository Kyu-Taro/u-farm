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


Auth::routes(['verify' => true]);

Route::get('/', 'MainController@index')->name('index');
Route::post('/register_second','Admin\Auth\RegisterController@register');
Route::get('/login_second','MainController@login_second');
Route::post('/login_second','LoginController@login_second');
Route::post('/login','LoginController@login')->name('login');
Route::get('/register_second','MainController@register_second');
Route::get('/logout','MainController@logout');
Route::resource('/items','ItemsController');

Route::group(['middleware' => 'verified'],function(){
    Route::get('/item','MainController@items')->name('items');
    Route::resource('/admin','AdminController');
    Route::post('/charge/{item_id}/{user_id}','ChargeController@charge')->name('charge');
});

Route::group(['middleware' => 'auth:user'],function(){
    Route::get('/setting_second','MainController@setting_second');
    Route::resource('/user','UserController');
});

Route::group(['middleware' => 'auth:admin'],function(){
    Route::get('/mypage','MainController@mypage')->name('mypage');
    Route::get('/create','MainController@create');
    Route::get('/delete/{id}','MainController@delete');
    Route::get('/update/{id}','MainController@update');
    Route::get('/account_add','MainController@account_add')->name('account_add');
    Route::get('/account_update','MainController@account_update')->name('account_update');
    Route::resource('/account','AccountController');
    Route::get('/setting','MainController@setting')->name('setting');
});
