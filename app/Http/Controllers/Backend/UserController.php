<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Validated;
use App\Http\Requests\UserProductRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::paginate(5);
        $users = User::paginate(5);
        return view('backend.users.index')->with([
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->phone = $request->get('phone');
        $user->role = $request->get('role');
        $success = $user->save();
        if ($success)
            $request->session()->flash('success', 'Tao mới thành công nhân viên ' .$user->name);
        else
            $request->session()->flash('error', 'Tạo mới thất bại');

        return redirect()->route('User.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function test(){
        //        $user = User::find(1);
        //        $userInfo = $user->userInfo;
        //        dd($userInfo->fullname);
        
        //        $user_info = UserInfo::find(1);
        //        $user = $user_info->user;
        //        $products = Category::find(1)->products()->where('status', 1)->get();
        //        dd($products);
        
        //        $product = Product::find(1);
        //        $category = Category::find(4);
        //
        //        $productSaved = $category->products()->save($product);
        
        //        $category = Category::find(5);
        
        //        $product = $category->products()->create([
        //            'name' => 'san pham create 4',
        //            'origin_price' => '10000',
        //            'slug' => 'hi',
        //            'content' => 'hello ae',
        //            'origin_price' => '100',
        //            'sale_price' => '5000',
        //            'discount_price' => 1100000,
        //            'content' => 'Noi dung demo',
        //            'user_id' => 1,
        //            'status'=>1
        //        ]);
        //        dd($user->email);
        
        //        $product = Product::find(1);
        //        $orders = $product->orders;
        //        dd($orders);
        
        //        $order = Order::find(1);
        
        //        $order_id = 1;
        //        $order = Order::find(1);
        //        $product_id = 1;
        //        $order->products()->attach($product_id);
        
        //        $order_id = 1;
        //        $shop = Order::find($order_id);
        //        $product_id_1 =1;
        //        $product_id_2 = 2;
        //        $product_id_3 = 3;
        //        $shop->products()->attach([
        //            $product_id_1,
        //            $product_id_2,
        //            $product_id_3
        //        ]);
        
                // $order = Order::find(1);
        //        // xóa một sản phẩm ra khỏi shop
                // $order->products()->detach(1);
        
                // xóa nhiều sản phẩm ra khỏi shop
        //        $product_id_1 =1;
        //        $product_id_2 = 2;
        //        $product_id_3 = 3;
        //        $order->products()->detach([
        //
        //            $product_id_2
        //
        //        ]);
        
                // xóa tất cả sản phẩm ra khỏi shop
                // $order->products()->detach();
            }
}
