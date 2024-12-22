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


#SinhVien - Model
use App\Http\Controllers\nhdSinhVienController;
Route::get('/nhd-sinhvien',[nhdSinhVienController::class,'nhdList'])->name('nhdsinhvien.nhdList');

Route::get('/nhd-sinhvien/create',[nhdSinhVienController::class,'nhdcreate'])->name('nhdsinhvien.nhdcreate');
Route::post ('/nhd-sinhvien/create',[nhdSinhVienController::class,'nhdCreateSubmit'])->name('nhdsinhvien.nhdCreateSubmit');

// chi tiết 
Route::get('/sinhvien/detail/{masv}',[nhdSinhVienController::class,'nhdGetSinhvien'])->name('sinhvien.nhdGetSinhvien');

Route::get('/sinhvien/edit/{masv}', [nhdSinhVienController::class, 'nhdEdit'])->name('sinhvien.nhdEdit');
Route::put('/sinhvien/edit/{masv}', [nhdSinhVienController::class, 'nhdEditSubmit'])->name('sinhvien.nhdEditSubmit');


// xóa
Route::get('/sinhvien/delete/{masinhvien}',[nhdSinhVienController::class,'nhddelete'])->name('sinhvien.nhddelete');