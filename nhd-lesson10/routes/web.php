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

// nhacc
use App\Http\Controllers\nhdNhaCCController;
Route::get('/nhdnhacc',[nhdNhaCCController::class,'nhdlist'])->name('nhdnhacc.nhdlist');
//chi tiet
Route::get('/nhdnhacc/detail/{manhacc}',[nhdNhaCCController::class,'nhddetail'])->name('nhdnhacc.nhddetail');
// edit
Route::get('/nhdnhacc/edit/{manhacc}',[nhdNhaCCController::class,'nhdedit'])->name('nhdnhacc.nhdedit');
Route::post('/nhdnhacc/edit/{manhacc}',[nhdNhaCCController::class,'nhdeditsubmit'])->name('nhdnhacc.nhdeditsubmit');
// create
Route::get('/nhdnhacc/create', [nhdNhaCCController::class, 'nhdcreate'])->name('nhdnhacc.nhdcreate');
Route::post('/nhdnhacc/create', [nhdNhaCCController::class, 'nhdcreatesubmit'])->name('nhdnhacc.nhdcreatesubmit');
// delete
Route::get('nhdnhacc/delete/{manhacc}',[nhdNhaCCController::class,'nhddelete'])->name('nhdnhacc.nhddelete');
