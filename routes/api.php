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
    if (is_null($user)) {
        return response()->json([
            'meta' => [
                'status' => 'error'
                ]
            ],
            401
        );

    } else {
        return response()->json([
            'meta' => [
                'status' => 'ok'
            ],
            'data' => [
                'user' => $user
            ]
        ]);

    }
});
Route::resource('/items','ItemController');
