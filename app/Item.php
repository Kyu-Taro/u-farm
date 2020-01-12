<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'farmer_id', 'img', 'name','price','sipping_duration','text','recipe','area','detail_img','detail_prof'
    ];
}
