<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function details(){
        // todo
        return view('product.details');
    }
    public function cart(){
        // todo
        return view('product.cart');
    }
}
