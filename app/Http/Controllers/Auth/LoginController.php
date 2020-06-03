<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
<<<<<<< HEAD
use Illuminate\Http\Request;
=======
use Auth;
>>>>>>> e5b9347677a7fa3165ac115b9bb4a1084d67c312

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
<<<<<<< HEAD
    protected $redirectTo = RouteServiceProvider::HOME;
=======
    protected $redirectTo = '/home';
>>>>>>> e5b9347677a7fa3165ac115b9bb4a1084d67c312

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

<<<<<<< HEAD
    public function redirectTo(){    
    if(Auth::user()->role_id == 2){
        //假如是一般使用者
        return '/home';
    }else if(Auth::user()->role_id == 1){
        //假如是管理員
        return '/admin';
    }else{
        return '/login';
    }
}

    protected function loggedOut(Request $request)
    {
        return redirect('/my/logout/path');
    }
=======
    public function redirectTo(){
        if(Auth::user()->role_id ==2){
        //假如是一般使用者
            return '/home';
        }else if (Auth::user()->role_id == 1){
            //假如是管理者
            return '/admin';
        }else{
            return '/login';
    }
}
>>>>>>> e5b9347677a7fa3165ac115b9bb4a1084d67c312
}
