<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Admin;
use App\Account;

class Item extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'admin_id','img', 'name', 'price','area','text','img'
    ];

    public function admin()
    {
        return $this->hasOne('App\Admin','id','admin_id');
    }

}
