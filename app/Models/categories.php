<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table = "categories";
    public $timestamps = false;
    protected $fillable = ['categoryId', 'categoryName'];

    public function product(){
        return $this->hasMany('App\Product','categoryId','categoryId');
    }
}
