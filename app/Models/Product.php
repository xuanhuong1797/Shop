<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name',
        'price',
        'description',
        'category_id',
        'brand_id',
    ];
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    public function image()
    {
        return $this->hasMany('App\Models\ImageProduct ');
    }
    
    public function love()
    {
        return $this->hasMany('App\Models\Love');
    }
}
