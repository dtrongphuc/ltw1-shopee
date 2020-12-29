<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $product = "product_images";
    public $timestamps = true;
   
    public function product() {
        return $this->hasMany('App\Product','productId');
    }
}
