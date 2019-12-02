<?php

//適当なアドレスにアクセスあった際には必ずこのページにアクセスさせる
Route::get('/{any?}',function(){
    return view('welcome');
})->where('any','.+');

//Authのルート
Auth::routes();
