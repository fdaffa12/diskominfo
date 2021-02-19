<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
// | password

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.index');
    }

    public function logout(){
        Auth::logout();
        return redirect('web-admin');
    }
}
