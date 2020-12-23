<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "categories";
    
    protected $fillable = [
        'categoryId',
        'categoryName',
    ];
}
