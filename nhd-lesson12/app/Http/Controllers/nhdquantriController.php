<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class nhdquantriController extends Controller
{
    //

    //get login
    public function nhdLogin(){
        return view("nhdLogin.nhd-login");
    }
    //post login
    public function nhdLoginSubmit(Request $request){
        return view("nhdLogin.nhd-login");
    }
}
