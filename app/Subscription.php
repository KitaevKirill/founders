<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $guarded = ['token'];

//    public function category1(){
//        return $this->hasOne('App\Category');
//    }
}
