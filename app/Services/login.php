<?php

namespace App\Services;

use Illuminate\Http\Request;

class login {

    //ログインを保持するログイン処理をするメソッド
    public function login($email,$password,$remember)
    {
        if(Auth::attempt(['email' => $email,'password' => $password],$remember)){
            return redirect()->route('/');
        }else{
            return back()->with('error','※メールアドレス又はパスワードが違います');
        }
    }

    //ログイン保持しないログイン処理をするメソッド
    public function login_second($email,$password)
    {
        if(Auth::attempt(['email' => $email,'password' => $password])){
            return redirect()->route('/');
        }else{
            return back()->with('error','※メールアドレス又はパスワードが違います');
        }
    }

}
