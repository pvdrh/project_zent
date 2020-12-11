<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Validator;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::paginate(5);

        foreach($products as $product){
            $category = Category::find($product->category_id);
            // dd($product->category_id);
            $product->category_id = $category ? $category->name : "Đang cập nhật";
        }
        return view('backend.products.index')->with([
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();

        return view('backend.products.create')->with([
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        
        //        $image = Image::find(5);
        // $product = Product::find(2);
        // $image = $product->images()->create([
        //     'name' => 'test1',
        //     'path' => 'https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80',
        //     'slug' => 'hi',
        //     'product_id' => '2'
        // ]);


//        if($request->hasFile('image')){
//            //Cách 1 (nên dùng cách này)
////            $file = $request->file('image');
////            $path = Storage::disk('public')->putFileAs('image', $file, 'test' . $file->getClientOriginalName());
//
//            //Cách 2 lưu thẳng vào trong public
//            $file = $request->file('image');
//            $name = $file->getClientOriginalName();
//            $file->move('image_2', $name);
//
//            //Lưu ảnh
        //    $image = new Image();
        //    $image->name = $file->getClientOriginalName();
        //    $image->disk = 'public';
        //    $image->path = $path;
        //    $image->product_id = 1;
        //    $image->save();
//
//            dd('OK');
//        }else{
//            dd('khong co');
//        };

        // if($request->hasFile('images')){
        //     $files = $request->file('images');

        //     foreach ($files as $file){
        //         $name = $file->getClientOriginalName();
        //         $file->move('image_5', $name);
        //     }
        // }

        
        
        $product = new Product();
       //Lưu avatar
       $file = $request->file('avatar');
       $path = storage::disk('public')->putFileAs('avatar', $file, 'avatar' . $file->getClientOriginalName());
       $product->avatar = $path;

      $product->model = $request->get('model');
      $product->name = $request->get('name');
      $product->quantity = $request->get('quantity');
      $product->slug = \Illuminate\Support\Str::slug($request->get('name'));
      $product->category_id = $request->get('category_id');
      $product->origin_price = $request->get('origin_price');
      $product->sale_price = $request->get('sale_price');
      $product->content = $request->get('content');
      $product->status = $request->get('status');
      $product->user_id = 1;
      $product->save();

 
  //Lưu ảnh của sản phẩm
      if($request->hasFile('images')){
      $images = $request->file('images');
      foreach($images as $image){
          $image = new Image();
          $file = $request->file('avatar');
          $image->product_id = $product->id;
          $path = storage::disk('public')->putFileAs('images', $file, 'product' . $file->getClientOriginalName());
          $image->name = $file->getClientOriginalName();
          $image->path = $path;
          $image->save();
      }
      }
     

      $save =1;
      if($save){
          $request->session()->flash('status', 'Tạo thành công');
      }
      else{
          $request->session()->flash('error', 'Tạo không thành công');
      }
      return redirect()->route('backend.products.index');
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
        $product = Product::find($id);

        $user = Auth::find(1);

        if($user->can('update', $products)){
            dd('co ccccc');
        }
        else{
            dd('khongggg');
        }
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
}
