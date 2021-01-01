<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
        //trở lại trang trước đó
        return redirect()->back(); 
    }
    public function upQuantityProduct(Request $request){
        if($request->updown == "dw"){
            // DB::table('carts')->where('id', $request->productid)->update(['quatity' => ($request->quantity + 1)]);
            $tt = intval($request->quantity) - 1;
            return response()->json($tt, 200);
        }
        if($request->updown == "up"){
            // DB::table('carts')->where('id', $request->productid)->update(['quatity' => ($request->quantity - 1)]);
            $tt = intval($request->quantity) + 1;
            return response()->json($tt, 200);
        }
    }
    public function CartRedirectDetailProduct($cartId){
        // return
    }
    public function CartRedirectPay(){
        
        // return 
    }
}
