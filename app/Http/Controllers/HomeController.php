<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //lưu file trong public để có thể lấy ra dữ liệu
//        Storage::disk('public')->put('test7.txt', 'Duy');
        //Lấy ra đường dẫn của file
//        $url = Storage::disk('public')->url('file2.txt');
//        dd($url);

        //Di chuyển file
//        Storage::disk('public')->move('file9.txt', 'test/file99.txt');
//        dd('Đã di chuyển file');
//        return Storage::download('file.txt');
//        Storage::disk('local')->put('file.txt', 'Contents');
//        Storage::disk('local2')->put('file1.txt', 'Contents');
        dd(1);
//        Storage::disk('local')->put('file.txt', 'Contents');
//        return view('frontend.home');
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
