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

        return view('frontend.page.cart')->with(['items'=>$items]);
    }

    public function add(Request $request,$id){
        
        $product = Product::find($id);
        Cart::add($product->id, $product->name, $request->get('quantity') ,$product->sale_price, 0);

        return redirect()->route('cart.index')->with([
            'product'=>$product
        ]);
    }

    public function delete($cart_id){
        Cart::remove($cart_id);
        return redirect()->route('cart.index');
    }

}
