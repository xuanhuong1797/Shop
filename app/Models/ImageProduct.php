<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    //
    protected $fillable = [
        'product_id',
        'image_url',
    ];
    
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
    
    public function scopeFindProduct($query, $idProduct)
    {
        return $query->where('product_id', $idProduct);
    }
}
