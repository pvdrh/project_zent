<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
       
        //Cache
        // $categories = Category::get();

        // Cache::put('Category',$categories,'1000');
        // $value = Cache::get('Category');
        // dd($value);

        //Dem luot xem san pham
        // Cache::increment('view');
        // $value = Cache::get('view');
        // dd($value);


        //Cache tieu chuan
        //Cach 1
        // if(!Cache::has('Category')){
            // $categories = Category::get();
            // Cache::put('Category', $categories, 100);
        // }   
        // $categories = Cache::get('Category');
        // dd($categories);

        //Cach 2
        // $categories = Cache::remember('Category', 100, function () {
        //     $categories = Category::get();
        //     return $categories;
        // });

        // dd($categories);

        // return view('home')->with(['categories' => $categories]);
        // $test = $request->session()->push('namee', 'Duy');
        // session(['name' => 'Duy']);  
        // $request->session()->pull('namee');
        // var_dump(session('namee'));
        // echo session('name');

        //Cookie
        // $cookie = cookie('product_name', 'abc', 100);
        // return response('Ok')->cookie($cookie);
        // $value = $request->cookie('product_namưe');
        // $value = Cookie::get('product_name');
        // dd($value);
        // return 1;

        return view('home');
    }
}
