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

#Khoa
use App\Http\Controllers\nhdKhoaController;

Route::get('/khoa',[nhdKhoaController::class,'nhdGetAllkhoa'])->name('nhdkhoa.nhdGetAllkhoa');

//khoa detail ,thông tin chi tiết khoa
Route::get('/khoa/nhddetail/{nhdmakh}',[nhdKhoaController::class,'nhdGetkhoa'])->name('nhdkhoa.nhdGetkhoa');
//khoa - edit
Route::get('/khoa/edit/{makh}', [nhdKhoaController::class, 'nhdEdit'])->name('khoa.nhdEdit');
// Route xử lý form submit
Route::post('/khoa/edit', [nhdKhoaController::class, 'nhdEditSubmit'])->name('khoa.nhdEditSubmit');
//delete
Route::get('/khoa/delete/{makh}',[nhdKhoaController::class,'nhdDelete'])->name('khoa.nhdDelete');
Route::post('/khoa/delete',[nhdKhoaController::class,'nhdDeleteSubmit'])->name('khoa.nhdDeleteSubmit');

Route::get('/khoa/create',[nhdKhoaController::class,'create'])->name('khoa.create');
Route::post('/nhdkhoa/create', [nhdKhoaController::class, 'createSubmit'])->name('nhdkhoa.createSubmit');


// mon hoc
use App\Http\Controllers\nhdMonHocController;
Route::get('/monhoc',[nhdMonHocController::class,'nhdlist'])->name('nhdmonhoc.nhdlist');
//thông tin chi tiết môn học
Route::get('/monhoc/nhddetail/{nhdmamh}',[nhdMonHocController::class,'getMonHocById'])->name('nhdmonhoc.nhddetail');
# thêm mới
Route::get('/monhoc/nhdcreate',[nhdMonHocController::class,'nhdcreate'])->name('nhdmonhoc.nhdcreate');
Route::post('/monhoc/nhdcreate',[nhdMonHocController::class,'createSubmit'])->name('nhdmonhoc.createSubmit');
## sửa thông tin môn học
Route::get('/monhoc/nhdedit',[MonHocController::class,'nhdedit'])->name('nhdmonhoc.nhdedit');
Route::post('/monhoc/nhdedit',[MonHocController::class,'editSubmit'])->name('nhdmonhoc.editSubmit');