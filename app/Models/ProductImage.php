<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    const UPDATED_AT = NULL;
    const CREATED_AT = NULL;
    
    protected $product = "product_images";
    public $timestamps = false;
    protected $fillable  = ['productId', 'productImage'];
   
    public function product() {
        return $this->hasMany('App\Product','productId');
    }
}
