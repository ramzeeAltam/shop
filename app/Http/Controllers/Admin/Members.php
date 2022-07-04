<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Members  extends Controller 
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected function showusers(){   
       
      return  User::select('id','name','email')->get();
      //  return  User::get();

       }
     
    public function getmembers()
    {
         $users=$this->showusers();
        //$users= ['id'=>'1'];
       // $users=User::select('id','name','email')->get();
       return view('admin\Users\members',compact('users'));
       // return  $users[0]->id;

    }
   
}
