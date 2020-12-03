<?php

namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Facade;
use App\Http\Controllers\Controller;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $items = Cart::content();
// dd($items);
        return view('frontend.page.cart')->with(['items'=>$items]);
    }

    // public function add($id){
    //     $product = Product::find($id);
    //     dd($product);
    //     // dd($id);
    //     Cart::add($product->$id, $product->name, 1, $product->sale_price, 0);

    //     return redirect()->route('frontend.page.cart');
    // }

    // public function remove($cart_id){
    //     Cart::remove($cart_id);
    //     return redirect()->route('frontend.page.cart');
    // }
}
