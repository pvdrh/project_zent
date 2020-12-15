<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::paginate(10); 
        return view('backend.categories.index')->with([
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // where('depth', '<=', 2)->
        $categories = Category::get();
        return view('backend.categories.create')->with(['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $this->authorize('create', Category::class);
        $category = new Category();

        $category->name = $request->name;
        $category->slug = \Illuminate\Support\Str::slug($request->get('name'));
        $category->parent_id = $request->parent_id;
        $category->depth = $request->depth;
        $save = $category->save();

        if ($save)
            $request->session()->flash('success', 'Tao mới thành công');
        else
            $request->session()->flash('error', 'Tạo mới thất bại');

        return redirect()->route('backend.categories.index');
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
        $category = Category::find($id);
        return view('backend.categories.edit')->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoryRequest $request, $id)
    {
        $this->authorize('update', $category);
        $category = Category::find($id);

        $category->name = $request->get('name');
        $category->slug = \Illuminate\Support\Str::slug($request->get('name'));
        $category->parent_id = $request->get('parent_id');
        $category->depth = $request->get('depth');

        $save = $category->save();

        if ($save)
            $request->session()->flash('success', 'Cập nhật thành công');
        else
            $request->session()->flash('error', 'Cập nhật thất bại');

        return redirect()->route('backend.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('update', $category);
        $category = Category::find($id);
        
        $products = Product::where('category_id',$category->id)->get();
        foreach ($products as $product){
            $product->category_id = null;
            $product->save();
        }

        $category->delete();
        return redirect()->route('backend.categories.index');
    }

    public function getData(){
        $categories = Category::all(); 

        return Datatables::of($categories)
            ->addIndexColum()

            ->make(true);
        
    }
}
