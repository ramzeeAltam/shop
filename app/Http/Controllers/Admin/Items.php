<?php

namespace App\Http\Controllers\Admin;
 use Illuminate\Http\Request;

class  Items 
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
     
    public function getItems()
    {
        return view('admin\Items\Items');
    }

}
