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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function product(){
        return view('category');
    }

    public function myindex(){
        return view('index');
    }
    public function checkout1(){
        return view('checkout1');
    }

    public function detail(){
        return view('detail');
    }


}
