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


use App\Http\Controllers\nhd_signupcontroller;
Route::get('/signup',[nhd_signupcontroller::class,'index'])->name('signup.index');
Route::post('/signup',[nhd_signupcontroller::class,'index'])->name('signup.submit');
Route::post('/nhd-assignment3', [Assignment3Controller::class, 'store'])->name('nhd-assignment3.store');
