<?php

namespace App\Http\Controllers\Favorite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function favorite(){
        
        return view('pages/favorite');
    }
}
