<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Admin;

class Item extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'admin_id','img', 'name', 'price','area','text',
    ];

    public function admin()
    {
        return $this->hasOne('App\Admin','id','admin_id');
    }
}
