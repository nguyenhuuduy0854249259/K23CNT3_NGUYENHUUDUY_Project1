<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


#Views
Route::get('/nhd-view1',function(){
    return view('nhd-view1',['name'=>'Tôi là Akairu Nguyễn !']);
});

Route::get('/nhd-view2',function(){
    return view('nhd-view2',[
    
    'name'=>'Devmaster Academy!',
    'arr'=>[1],
    ]);
    
    });

    Route::get('/nhd-view3',function(){
        return view('nhd-view3',[        
        'name'=>["Devmaster","Academy","Akairu","Nguyễn"],       
        'arr'=>[10,15,12,1,22,30],
        'users'=>[],
        ]);
        
        });


        use App\Http\Controllers\ProductController;
        Route::get('/', [ProductController::class, 'index']); 


    #Template Blade Layout
    Route::get('/home',function(){
    return view('index');
    });
    Route::get('/about-us',function(){
    return view('about');
    });
    Route::get('/contact',function(){
    return view('contact');
    });