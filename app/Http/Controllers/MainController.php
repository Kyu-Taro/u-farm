<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Item;
use App\Account;
use App\Client;

class MainController extends Controller
{
    public function index()
    {
        // return view('pages.index');
        return view('index');
    }

    public function register_second()
    {
        return view('pages.register_second');
    }

    public function items()
    {
        $items = Item::get();
        return view('pages.items',compact('items'));
    }

    public function logout()
    {
        Auth::logout();
        Auth::guard('admin')->logout();
        return redirect()->route('index');
    }

    public function login_second()
    {
        return view('pages.login_second');
    }

    public function mypage()
    {

        if (Auth::guard('admin')->check()) {
            $user = Auth::guard('admin')->user();
            $items = Item::where('admin_id', $user->id)->get();

            $data = [
            'user' => $user,
            'items' => $items,
        ];

        $client = Account::where('admin_id',$user->id)->first();

        if(empty($client)){
            return redirect()->route('account_add');
        }

            return view('pages.mypage', $data);
        }else{
            return view('pages.items');
        }
    }

    public function create()
    {
        $user = Auth::guard('admin')->user();
        return view('pages.create',compact('user'));
    }

    public function delete($id)
    {
        $item = Item::find($id);
        return view('pages.delete',compact('item'));
    }

    public function update($id)
    {
        $item = Item::find($id);
        return view('pages.update',compact('item'));
    }

    public function setting()
    {
        $user = Auth::guard('admin')->user();
        return view('pages.setting',compact('user'));
    }

    public function account_add()
    {
        $user = Auth::guard('admin')->user();
        $account = Account::where('admin_id',$user->id)->first();

        if(!empty($account)){
            return redirect()->route('account_update');
        }

        return view('pages.account_add',compact('user'));
    }

    public function account_update()
    {
        $user = Auth::guard('admin')->user();
        $account = Account::where('admin_id',$user->id)->first();

        if (!empty($account)) {
            $data = [
                'user' => $user,
                'account' => $account
            ];

            return view('pages.account_update',$data);
        }else{
            return redirect()->route('account_add');
        }
    }

    public function setting_second()
    {
        $user = Auth::user();
        return view('pages.setting_second',compact('user'));
    }

    public function news()
    {
        $admin = Auth::guard('admin')->user();
        $clients = Client::where('admin_id',$admin->id)->get();
        return view('pages.news',compact('clients'));
    }
}
