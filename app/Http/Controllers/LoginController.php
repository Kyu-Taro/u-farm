<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //利用者ログインアクション
    public function login(Request $request,LoginRequest $validate)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $value = $request->input('check');

        $remember = 60 * 60 * 24 * 30;

        if($value === 1){
            if(Auth::attempt(['email' => $email,'password' => $password],$remember)){
                return redirect()->route('items');
            }else{
                return back()->with('error','※メールアドレス又はパスワードが違います');
            }
        }else{
            if(Auth::attempt(['email' => $email,'password' => $password])){
                return redirect()->route('items');
            }else{
                return back()->with('error','※メールアドレス又はパスワードが違います');
            }
        }
    }

        //農家ログインアクション
        public function login_second(Request $request,LoginRequest $validate)
        {
            $email = $request->input('email');
            $password = $request->input('password');
            $value = $request->input('check');

            $remember = 60 * 60 * 24 * 30;

            if($value === 1){
                if(Auth::guard('admin')->attempt(['email' => $email,'password' => $password],$remember)){
                    return redirect()->route('mypage');
                }else{
                    return back()->with('error','※メールアドレス又はパスワードが違います');
                }
            }else{
                if(Auth::guard('admin')->attempt(['email' => $email,'password' => $password])){
                    return redirect()->route('mypage');
                }else{
                    return back()->with('error','※メールアドレス又はパスワードが違います');
                }
            }
        }
}
