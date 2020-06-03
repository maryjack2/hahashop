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
<<<<<<< HEAD
        $this->middleware('auth');
=======
        // $this->middleware('auth');
>>>>>>> e5b9347677a7fa3165ac115b9bb4a1084d67c312
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
        return view('index');
    }
=======
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


>>>>>>> e5b9347677a7fa3165ac115b9bb4a1084d67c312
}
