<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
      
    }

    public function detail($id)
    {
      $product = Product::find($id);

        return view('frontend.page.product_detail')->with(['product' => $product]);
    }
}
