<?php

use Illuminate\Http\Request;

Route::post('/register','Auth\RegisterController@register')->name('register');
Route::post('/login','LoginController@login')->name('login');
Route::post('/logout','Auth\LoginController@logout')->name('logout');

