<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Love extends Model
{
    //
    protected $fillable = [
        'product_id',
        'user_id',
        'loved',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
    
    public function scopeLoved($query, $idProduct, $idUser)
    {
        return $query->where(['product_id' => $idProduct, 'user_id' => $idUser]);
    }
}
