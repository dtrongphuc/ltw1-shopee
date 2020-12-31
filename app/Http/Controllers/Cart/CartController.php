<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function cart()
    {
        $productsofcart = DB::table('products')
            ->join('carts', 'carts.productId', '=', 'products.productId')
            ->select('carts.id', 'products.productName', 'carts.type', 'products.price', 'carts.quatity')
            ->get();
        $sum = 0;
        foreach($productsofcart as $sp)
        {
            $sum = $sum + ($sp->quatity * $sp->price);
        }
        return view('pages/cart', ['products' => $productsofcart], ['payall' => $sum]);
    }
    public function deleteCartById($cartId)
    {
        $cart = Cart::find($cartId)->delete();
        return redirect()->back(); 
    }
}
