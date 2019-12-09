<?php

use Illuminate\Http\Request;

Route::post('/register','Auth\RegisterController@register')->name('register');
ROute::post('/login','Auth\LoginController@login')->name('login');
