<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = "categories";
    public $timestamps = false;
    protected $fillable = ['categoryName', 'description'];

    public function product()
    {
        return $this->hasMany('App\Product', 'categoryId', 'categoryId');
    }
}
