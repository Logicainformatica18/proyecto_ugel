<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

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
    public function index()
    {
       $users= Auth::user();

      //  return $users->roles_;
      return view('home',compact("users"));
    }
    public function sistema()
    {
       $users= Auth::user();


      return view('sistema',compact("users"));
    }
}
