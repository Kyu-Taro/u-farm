<?php

namespace App\Services;

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

}
