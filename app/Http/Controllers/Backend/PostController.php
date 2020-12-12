<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Validator;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::paginate(5);
        return view('backend.posts.index')->with([
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::get();
        return view('backend.posts.create')->with(['posts' => $posts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
        $post = new Post();

        $file = $request->file('img');
        $path = storage::disk('public')->putFileAs('img', $file, 'posts' . $file->getClientOriginalName());
        $post->img = $path;

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $save = $post->save();

        if ($save)
            $request->session()->flash('success', 'Tao mới thành công');
        else
            $request->session()->flash('error', 'Tạo mới thất bại');

        return redirect()->route('backend.posts.index');
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
        $post = Post::find($id);
        return view('backend.posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBlogRequest $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->get('title');
        $post->slug = $request->get('slug');
        $post->content = $request->get('content');

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $path = storage::disk('public')->putFileAs('img', $file, 'posts' . $file->getClientOriginalName());
            $post->img = $path;
        }
        $save = $post->save();

        if ($save)
            $request->session()->flash('success', 'Cập nhật thành công');
        else
            $request->session()->flash('error', 'Cập nhật thất bại');

        return redirect()->route('backend.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('backend.posts.index');
    }
}
