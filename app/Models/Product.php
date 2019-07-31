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
        'quantity',
        'category_id',
        'brand_id',
    ];
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }
    
    public function imageproducts()
    {
        return $this->hasMany(ImageProduct::class, 'product_id', 'id');
    }
    
    public function product_order(){
        return $this->hasMany('App\Models\ProductOrder');
    }
    
    public function love()
    {
        return $this->hasMany('App\Models\Love');
    }
}
