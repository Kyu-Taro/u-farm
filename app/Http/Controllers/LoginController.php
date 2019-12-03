<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Login;

class LoginController extends Controller
{
    //ログイン処理をするアクション
    public function login(Request $request,Login $login)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $remember = $request->input('remember');
        $value = $request->input('value');

        //Loginクラスを呼び出してログイン処理をさせる
        if($value === 1){
            $redirect = $login->login($email,$password,$remember);
            return $redirect;
        }else{
            $redirect = $login->login_second($email,$password);
            return $redirect;
        }
    }
}
