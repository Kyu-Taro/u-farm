<?php

//適当なアドレスにアクセスあった際には必ずこのページにアクセスさせる
// Route::get('/{any?}',function(){
//     return view('welcome');
// })->where('any','.+');

//確認用
Route::get('/',function(){
    return view('welcome');
});

//Authのルート
Auth::routes(['verify' => true]);
