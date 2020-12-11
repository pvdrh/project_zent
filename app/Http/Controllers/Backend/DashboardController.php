<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Post;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $users = Cache::remember('users', 1000, function () {
            return User::count();
        });

        $categories = Cache::remember('categories', 1000, function () {
            return Category::count();
        });

        $orders = Cache::remember('orders', 1000, function () {
            return Order::count();
        });
        
        $posts = Cache::remember('posts', 1000, function () {
            return Post::count();
        });

    

        return view('backend.dashboard')->with([
            'users'=>$users,
            'categories'=>$categories,
            'orders'=>$orders,
            'posts'=>$posts
        ]);
    }
}
    
