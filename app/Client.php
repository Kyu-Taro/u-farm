<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    public function item()
    {
        return $this->hasOne('App\Item','id','item_id');
    }

    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }

}
