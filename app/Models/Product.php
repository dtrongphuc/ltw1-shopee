<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected $product = "Products";
    public $timestamps = true;

    public function categories()
    {
        return $this->belongTo('App\categories', 'categoryId', 'productId');
    }
}
