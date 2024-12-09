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


use App\Http\Controllers\nhdSessionController;
Route::get('/nhd-session/get', [nhdSessionController::class,'nhdGetSessionData'])->name('nhdsession.get');
Route::get('/nhd-session/set', [nhdSessionController::class,'nhdStoreSessionData'])->name('nhdsession.set');
Route::get('/nhd-session/del', [nhdSessionController::class,'nhdDeleteSessionData'])->name('nhdsession.delete');

#Accout
use App\Http\Controllers\nhdAccountController;
Route::get('/nhd-login', [nhdAccountController::class,'nhdLogin'])->name('nhdaccount.nhdlogin');
Route::get('/nhd-logout', [nhdAccountController::class,'nhdLogout'])->name('nhdaccount.nhdlogout');
//Route::post('/nhd-login', [nhdAccountController::class,'nhdLoginSubmit'])->name('nhdaccount.nhdloginsubmit');
Route::post('/nhd-login', [nhdAccountController::class,'nhdLoginSubmit'])->name('nhdaccount.nhdloginsubmit');
