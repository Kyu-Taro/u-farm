<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use App\Item;
use Illuminate\Support\Facades\Auth;


class Judgment
{

    public function emptyAccount($account,$user)
    {
        if(!empty($account)){
            return redirect()->route('account_update');
        }else{
            return view('pages.account_add',compact('user'));
        }
    }

    public function profUpdate($request,$user)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $postNumber = $request->input('postNumber');
        $area = $request->input('area');
        $tell = $request->input('tell');
        $text = $request->input('text');

        $user->name = $name;
        $user->email = $email;
        $user->postNumber = $postNumber;
        $user->area = $area;
        $user->tell = $tell;
        $user->text = $text;
        $user->save();
    }

    public function profUpdateStorage($request,$user)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $postNumber = $request->input('postNumber');
        $area = $request->input('area');
        $tell = $request->input('tell');
        $text = $request->input('text');

        $path = Storage::disk('s3')->putFile('u-farm',$request->file('img'),'public');
        $img = Storage::disk('s3')->url($path);

        $user->name = $name;
        $user->email = $email;
        $user->postNumber = $postNumber;
        $user->area = $area;
        $user->tell = $tell;
        $user->text = $text;
        $user->img = $img;

        $user->save();
    }

    public function itemStore($request)
    {
        $form = $request->all();
        unset($form['_token']);
        $item = new Item;
        $item->fill($form)->save();
    }

    public function itemStoreStorage($request)
    {
        $form = $request->all();
        unset($form['_token']);
        $item = new Item;
        $path = Storage::disk('s3')->putFile('u-farm',$request->file('img'),'public');
        $img = Storage::disk('s3')->url($path);
        $form['img'] = $img;
        $item->fill($form)->save();
    }

    public function itemUpdate($request,$item)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $area = $request->input('area');
        $day = $request->input('day');
        $text = $request->input('text');

        $item->name = $name;
        $item->price = $price;
        $item->area = $area;
        $item->day = $day;
        $item->text = $text;
        $item->save();
    }

    public function itemUpdateStorage($request,$item)
    {
        $form = $request->all();
        unset($form['_token']);
        $path = Storage::disk('s3')->putFile('u-farm',$request->file('img'),'public');
        $img = Storage::disk('s3')->url($path);
        $form['img'] = $img;
        $item->fill($form)->save();
    }

    public function login($email,$password,$remember)
    {
        if(Auth::attempt(['email' => $email,'password' => $password],$remember)){
            return redirect()->route('items');
        }else{
            return back()->with('error','※メールアドレス又はパスワードが違います');
        }
    }

    public function login_second($email,$password)
    {
        if(Auth::attempt(['email' => $email,'password' => $password])){
            return redirect()->route('items');
        }else{
            return back()->with('error','※メールアドレス又はパスワードが違います');
        }
    }

    public function loginFarm($email,$password,$remember)
    {
        if(Auth::guard('admin')->attempt(['email' => $email,'password' => $password],$remember)){
            return redirect()->route('mypage');
        }else{
            return back()->with('error','※メールアドレス又はパスワードが違います');
        }
    }

    public function loginFarm_second($email,$password)
    {
        if(Auth::guard('admin')->attempt(['email' => $email,'password' => $password])){
            return redirect()->route('mypage');
        }else{
            return back()->with('error','※メールアドレス又はパスワードが違います');
        }
    }

}
