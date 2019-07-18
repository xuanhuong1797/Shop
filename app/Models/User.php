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
}
