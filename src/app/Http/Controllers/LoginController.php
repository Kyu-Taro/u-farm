<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Services\Judgment;

class LoginController extends Controller
{
    //利用者ログインアクション
    public function login(Request $request,LoginRequest $validate,Judgment $jud)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $value = $request->input('check');

        $remember = 60 * 60 * 24 * 30;

        if($value === 1){
            $redirect = $jud->login($email,$password,$remember);
            return $redirect;
        }else{
            $redirect = $jud->login_second($email,$password);
            return $redirect;
        }
    }

        //農家ログインアクション
        public function login_second(Request $request,LoginRequest $validate,Judgment $jud)
        {
            $email = $request->input('email');
            $password = $request->input('password');
            $value = $request->input('check');

            $remember = 60 * 60 * 24 * 30;

            if($value === 1){
                $redirect = $jud->loginFarm($email,$password,$remember);
                return $redirect;
            }else{
                $redirect = $jud->loginFarm_second($email,$password);
                return $redirect;
            }
        }
}
