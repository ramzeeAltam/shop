<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

class HomeController  
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         
    }

    /**
     * Show the application dashboard.
     *
     *  
     */
    public function index()
    {
        return view('front/index');
    }
}
