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

#admins - route
route::get('/nhd-admins',function(){
    return view('nhdAdmins.index');
});

// list
use App\Http\Controllers\nhdloaisanphamController;
Route::get('/nhd-admins/nhdloaisanpham',[nhdloaisanphamController::class,'nhdList'])->name('nhdadims.nhdloaisanpham');
//create
Route::get('/nhd-admins/nhd-loai-san-pham/nhd-create',[nhdloaisanphamController::class,'nhdCreate'])->name('nhdadmin.nhdloaisanpham.nhdcreate');
Route::post('/nhd-admins/nhd-loai-san-pham/nhd-create',[nhdloaisanphamController::class,'nhdCreateSunmit'])->name('nhdadmin.nhdloaisanpham.nhdCreateSunmit');
// edit
Route::get('/nhd-admins/nhd-loai-san-pham/nhd-edit/{id}',[nhdloaisanphamController::class,'nhdEdit'])->name('nhdadmin.nhdloaisanpham.nhdEdit');
Route::post('/nhd-admins/nhd-loai-san-pham/nhd-edit',[nhdloaisanphamController::class,'nhdEditSubmit'])->name('nhdadmin.nhdloaisanpham.nhdEditSubmit');
// detail
Route::get('/nhd-admins/nhd-loai-san-pham/nhd-detail/{id}',[nhdloaisanphamController::class,'nhdGetDetail'])->name('nhdadmin.nhdloaisanpham.nhdGetDetail');
// delete
Route::get('/nhd-admins/nhd-loai-san-pham/nhd-delete/{id}',[nhdloaisanphamController::class,'nhdDelete'])->name('nhdadmin.nhdloaisanpham.nhdDelete');



//login
use App\Http\Controllers\nhdquantriController;         // CẦN CHÚ Ý
Route::get('/admins/nhd-login',[nhdquantriController::class,'nhdLogin'])->name('admins.nhdLogin');
Route::post('/admins/nhd-login',[nhdquantriController::class,'nhdLoginSubmit'])->name('admins.nhdLoginSubmit');