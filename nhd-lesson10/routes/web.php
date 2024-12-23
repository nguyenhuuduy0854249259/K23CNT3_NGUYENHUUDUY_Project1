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



// pxuat
use App\Http\Controllers\nhdpxuatController;
Route::get('/nhdpxuat',[nhdpxuatController::class,'nhdlist'])->name('nhdpxuat.nhdlist');
//chi tiet
Route::get('/nhdpxuat/detail/{mavattu}',[nhdpxuatController::class,'nhddetail'])->name('nhdpxuat.nhddetail');
// edit
Route::get('/nhdpxuat/edit/{mavattu}',[nhdpxuatController::class,'nhdedit'])->name('nhdpxuat.nhdedit');
Route::post('/nhdpxuat/edit/{mavattu}',[nhdpxuatController::class,'nhdeditsubmit'])->name('nhdpxuat.nhdeditsubmit');
// create
Route::get('/nhdpxuat/create',[nhdpxuatController::class,'nhdcreate'])->name('nhdpxuat.nhdcreate');
Route::post('/nhdpxuat/create',[nhdpxuatController::class,'nhdcreatesubmit'])->name('nhdpxuat.nhdcreatesubmit');
// delete
Route::get('nhdpxuat/delete/{mavattu}',[nhdpxuatController::class,'nhddelete'])->name('nhdpxuat.nhddelete');
