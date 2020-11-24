<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // $test = $request->session()->push('namee', 'Duy');
        // session(['name' => 'Duy']);  
        // $request->session()->pull('namee');
        // var_dump(session('namee'));
        // echo session('name');

        // return 1;
        return view('home');
    }
}
