<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    public $timestamps = false;
    protected $fillable = ['productId', 'name', 'quantity', 'price'];
    protected $primaryKey = 'id';
}
