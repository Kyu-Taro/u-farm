<?php

use Illuminate\Http\Request;

Route::post('/register','Auth\RegisterController@register')->name('register');
Route::post('/login','Auth\LoginController@login')->name('login');
Route::post('/logout','Auth\LoginController@logout')->name('logout');
Route::get('/csrftoken', function (Request $request) {
    return response()->json([
        'meta' => [
            'status' => 'ok'
            ]
    ]);
});
Route::get('/user', function (Request $request) {
    $user = $request->user();
    return response()->json([
        'meta' => [
            'status' => 'ok'
        ],
        'data' => [
            // 非ログイン時はuser=nullが帰る
            'user' => $user
        ]
    ]);
});
