<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{
    use AuthenticableTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $locale = 'locale';

    protected $settings;

    public function subscriptions()
    {
        return $this->hasOne('App\Subscription');
    }

    public function forAdmin()
    {
        if ($this->role_id == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function forAuthor()
    {
        if ($this->role_id <= 2) {
            return true;
        } else {
            return false;
        }
    }
}
