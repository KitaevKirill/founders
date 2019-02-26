<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subscription;
use Illuminate\Support\Facades\Auth;

class Category extends Model
{
    public function isSubscripted($id)
    {

        $user = Auth::user();

        $subs = \App\Subscription::firstOrCreate(['user_id' => $user->id]);

//        $subs = \App\Subscription::where('user_id', $user->id)->first();
//        $this->belongsTo('App\Subscription', 'category1');

        if ($id == 1) {

            if ($subs->category1 == 'on') {
                return true;
            } else {
                return false;
            }
        } elseif ($id == 2) {

            if ($subs->category2 == 'on') {
                return true;
            } else {
                return false;
            }
        } elseif ($id == 3) {

            if ($subs->category3 == 'on') {
                return true;
            } else {
                return false;
            }
        } elseif ($id == 4) {

            if ($subs->category4 == 'on') {
                return true;
            } else {
                return false;
            }
        } else {

            if ($subs->category5 == 'on') {
                return true;
            } else {
                return false;
            }
        }
    }
}
