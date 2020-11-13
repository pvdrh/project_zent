<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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
        return view('backend.products.index')->with([
            'products' => $products
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
    public function store(Request $request)
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
//            $path = Storage::disk('public')->putFile('images',$request->file('image'));
//            dd('file');
//        }else{
//            dd('khong co');
//        };

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
////            $image = new Image();
////            $image->name = $file->getClientOriginalName();
////            $image->disk = 'public';
////            $image->path = $path;
////            $image->product_id = 1;
////            $image->save();
//
//            dd('OK');
//        }else{
//            dd('khong co');
//        };

        if($request->hasFile('images')){
            $files = $request->file('images');

            foreach ($files as $file){
                $name = $file->getClientOriginalName();
                $file->move('image_5', $name);
                dd('OK');
            }
        }

        $validator = Validator::make($request->all(),
            [
                'name'         => 'required|min:10|max:255',
                'origin_price' => 'required|numeric',
                'sale_price'   => 'required|numeric',
                'discount_price' => 'required|numeric',
                'content' => 'required'
            ],
            [
                'required' => ':attribute Không được để trống',
                'min' => ':attribute Không được nhỏ hơn :min',
                'max' => ':attribute Không được lớn hơn :max'
            ],
            [
                'name' => 'Tên sản phẩm',
                'origin_price' => 'Giá gốc',
                'sale_price' => 'Giá bán',
                'discount_price' => 'Giảm giá',
                'content' => 'Mô tả sản phẩm'
            ]
        );
        if ($validator->errors()){
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        //Kiểm tra dữ liệu ở form (cách 1)
        // $validatedData = $request->validate([
        //     'name' => 'required|min:10|max:255',
        //     'category_id' => 'required',
        //     'content' => 'required',
        //     'status' => 'required',
        //     'origin_price' => 'required|numeric',
        //     'sale_price' => 'required|numeric'
        // ]);

        $product = new Product();
        $product->name = $request->get('name');
        $product->slug = \Illuminate\Support\Str::slug($request->get('name'));
        $product->category_id = $request->get('category_id');
        $product->origin_price = $request->get('origin_price');
        $product->discount_price = 10;
        $product->sale_price = $request->get('sale_price');
        $product->content = $request->get('content');
        $product->status = $request->get('status');
        $product->user_id = 1;
        $product->save();

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
}
