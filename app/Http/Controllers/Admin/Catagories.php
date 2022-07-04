<?php

namespace App\Http\Controllers\Admin;
 use Illuminate\Http\Request;

class Catagories
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
     
    public function getCatagories()
    {
        return view('Admin\Catagories\Catagories');
    }


}
