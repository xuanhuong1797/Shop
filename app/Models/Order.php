<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'user_id',
        'customer_name',
        'customer_phone',
        'address',
        'order_total',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
