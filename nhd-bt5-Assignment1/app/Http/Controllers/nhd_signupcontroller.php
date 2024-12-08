<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nhd_signupcontroller extends Controller
{
    public function index()
    {
        return view('nhd-signup');
    }
    public function signupSubmit(equest $request)
    {
        $ValidationData = $request->validate([
            'id'=> 'required|min:5|max:12',
            'password'=>'required|min:7|max:12',
            'name'=>'required|regex:/^[A-Za-z\s]+$/',
            'address'=>'nullable|string|max:255',
            'country'=>'required|in:VIETNAM,US,UK,CHINA,JAPAN,INDONESIA,PHILIPIN',
            'zipcode'=>'required|numberic',
            'email'=>'required|email',
            'sex'=>'required|in:Male,Female',
            'language'=>'required|in:English,Non English',
            'about'=>'nullable|string|max:255'

        ]);

        $id = $request->input('id');
        $password = $request->input('password');
        $name = $request->input('name');
        $address = $request->input('address');
        $country = $request->input('country');
        $zipcode = $request->input('zipcode');
        $email = $request->input('email');
        $sex = $request->input('sex');
        $language = $request->input('language');
        $about = $request->input('about');

        return "User ID:".$id. "Password:".$password. "Name:".$name. "address:".$address. "country:".$country. "zipcode:".$zipcode. 
        "Email:".$email. "sex:".$sex. "language:".$language. "about:".$about;
    }
}