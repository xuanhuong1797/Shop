<?php

namespace App\Repositories;

use App\Models\ImageProduct;

class ImageProductRepository extends BaseRepository
{
    protected $model;
    
    public function __construct() {
        
        $this->model = new ImageProduct();
    }
    
    
}
