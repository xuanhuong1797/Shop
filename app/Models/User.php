<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'username',
    ];
    
    protected $hidden = [
        'password',
        'remember_token',
        'updated_at',
    ];
    public function order()
    {
        return $this->hasMany('App\Models\Order');
    }
    
    public function love()
    {
        return $this->hasMany('App\Models\Love ');
    }
    
}

