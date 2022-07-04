<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require __DIR__.'/auth.php';
Auth::routes(); 

Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],function(){
    
        Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index'])->name('f.home');
        Route::get('/Dashboard', [App\Http\Controllers\Admin\Dashboard::class, 'getdash'])->name('Dashboard');

        Route::group(['prefix'=>'admin'],function(){
            Route::get('/Members', [App\Http\Controllers\admin\Members::class, 'getmembers'])->name('members');            
            Route::get('/Catagories', [App\Http\Controllers\admin\Catagories::class, 'getCatagories'])->name('Catagories');
            Route::get('/Items', [App\Http\Controllers\admin\Items::class, 'getItems'])->name('Items'); 
        });//$this->middleware('auth');
   
});

 
 
 
