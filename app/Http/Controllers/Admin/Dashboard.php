<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class Dashboard  extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function  __construct(){
      
    }
     
    public function getdash()
    {
        return view('admin\index');
    }

}
