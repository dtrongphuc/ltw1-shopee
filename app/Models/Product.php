<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    const UPDATED_AT = NULL;
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'productId';
    const CREATED_AT = 'postAt';
    public $timestamps = true;
    protected $fillable = ['categoryId', 'productName', 'description', 'price', 'quantity', 'likeCount', 'rate', 'sold', 'postAt'];

    protected $product = "Products";
    //public $timestamps = true;

    public function categories()
    {
        return $this->belongTo('App\categories', 'categoryId', 'productId');
    }
}
