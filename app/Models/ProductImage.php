<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    public $product = "ProductImage";
    public $timestamps = true;

   public function categories(){
       return $this->belongTo('App\Product','productId','productId');
   }
}
