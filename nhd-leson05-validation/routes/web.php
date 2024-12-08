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


use App\Http\Controllers\LoginController;

Route::get('/nhd-login', [LoginController::class, 'index'])->name('nhd-login');  //Route GET /login: Hiển thị form đăng nhập.

Route::post('/nhd-login-submit', [LoginController::class, 'loginSubmit'])->name('nhd-login.submit');    //Route POST /login-submit: Xử lý khi người dùng nhấn nút Submit.
