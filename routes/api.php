<?php

use Illuminate\Http\Request;

Route::post('/register','Auth\RegisterController@register')->name('register');
ROute::post('/login','Auth\LoginController@login')->name('login');
ROute::post('/logout','Auth\LoginController@logout')->name('logout');
ROute::get('/csrftoken', function (Request $request) {
    return response()->json([
        'meta' => [
            'status' => 'ok'
            ]
    ]);
});
ROute::get('/user', function (Request $request) {
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
