<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        return view('frontend.page.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        //Cach mac dinh
        // $categories = Category::get();
        // Cache::put('Category', $categories, 60);
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

    public function contact()
    {
        return view('frontend.page.contact');
    }

    public function getCategories($parent_categories)
    {
        foreach ($parent_categories as $category) {
            $count = Category::where('parent_id', $category->id)->count();
            if ($count != 0) {
                $category->has_child = true;
                $sub = Category::where('parent_id', $category->id)->get();
                $this->getCategories($sub);
                $category->sub_category = $sub;
            } else {
                $category->sub_category = false;
            }
        }
        return $parent_categories;
    }

    public function Blog()
    {
        $posts = Post::latest()->paginate(9);

        return view('frontend.page.blog.blog')->with([
            'posts' => $posts
        ]);
    }

    // public function Post($id)
    // {
    //     $post = Post::find($id);
    //     $count = Cache::increment($post->id);
    //     if ($count>20){
    //         $post->view += Cache::pull($post->id);
    //         $post->save();
    //     }
    //     $posts = Post::paginate(6);
    //     return view('frontend.page.blog.blog')->with([
    //         'post' => $post,
    //         'posts' => $posts
    //     ]);
    // }
}
