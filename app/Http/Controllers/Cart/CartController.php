<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function cart()
    {
        $productsofcart = DB::table('products')
            ->join('carts', 'carts.productId', '=', 'products.productId')
            ->select('products.productName', 'carts.type', 'products.price', 'carts.quatity')
            ->get();
        $sum = 0;
        foreach($productsofcart as $sp)
        {
            $sum = $sum + ($sp->quatity * $sp->price);
        }
        return view('pages/cart', ['products' => $productsofcart], ['payall' => $sum]);
    }
}
