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
Route::get('/nhd-admins',function(){
    return view('nhdadmins.index');
});

//cần chú ý
Route::get('/dashboard', function () {
    return view('nhdadmins.index'); // Hoặc tên view mà bạn muốn hiển thị sau khi đăng nhập
})->name('dashboard');


//use App\Http\Controllers\nhdadminController;
//Route::post('/nhd-login', [nhdadminController::class, 'nhdLoginSubmit'])->name('nhdadmins.nhdLoginSubmit');
//login
use App\Http\Controllers\nhdquantriController;         // CẦN CHÚ Ý
Route::get('/admins/nhd-login',[nhdquantriController::class,'nhdLogin'])->name('nhdadmins.nhdLogin');
Route::post('/admins/nhd-login',[nhdquantriController::class,'nhdLoginSubmit'])->name('nhdadmins.nhdLoginSubmit');


// loaisanpham
// list
use App\Http\Controllers\nhdloaisanphamController;
Route::get('/nhd-admins/nhdloaisanpham',[nhdloaisanphamController::class,'nhdList'])->name('nhdadims.nhdloaisanpham');
//create
Route::get('/nhd-admins/nhdloaisanpham/nhd-create',[nhdloaisanphamController::class,'nhdCreate'])->name('nhdadmins.nhdloaisanpham.nhdcreate');
Route::post('/nhd-admins/nhdloaisanpham/nhd-create', [nhdloaisanphamController::class, 'nhdCreateSubmit'])->name('nhdadmins.nhdloaisanpham.nhdCreateSubmit');
// edit
Route::get('/nhd-admins/nhdloaisanpham/nhd-edit/{id}',[nhdloaisanphamController::class,'nhdEdit'])->name('nhdadmins.nhdloaisanpham.nhdEdit');
Route::post('/nhd-admins/nhdloaisanpham/nhd-edit',[nhdloaisanphamController::class,'nhdEditSubmit'])->name('nhdadmins.nhdloaisanpham.nhdEditSubmit');
// detail
Route::get('/nhd-admins/nhdloaisanpham/nhd-detail/{id}',[nhdloaisanphamController::class,'nhdGetDetail'])->name('nhdadmins.nhdloaisanpham.nhdGetDetail');
// delete
Route::get('/nhd-admins/nhdloaisanpham/nhd-delete/{id}',[nhdloaisanphamController::class,'nhdDelete'])->name('nhdadmins.nhdloaisanpham.nhdDelete');


// Quản trị Viên--------------------------------------------------------------------------------------------------------------------------------------
// list
Route::get('/nhd-admins/nhd-quan-tri',[nhdquantriController::class,'nhdList'])->name('nhdadmins.nhdquantri');
//detail
Route::get('/nhd-admins/nhd-quan-tri/nhd-detail/{id}', [nhdquantriController::class, 'nhdDetail'])->name('nhdadmin.nhdquantri.nhdDetail');
//create
Route::get('/nhd-admins/nhd-quan-tri/nhd-create',[nhdquantriController::class,'nhdCreate'])->name('nhdadmin.nhdquantri.nhdcreate');
Route::post('/nhd-admins/nhd-quan-tri/nhd-create',[nhdquantriController::class,'nhdCreateSubmit'])->name('nhdadmin.nhdquantri.nhdCreateSubmit');
//edit
Route::get('/nhd-admins/nhd-quan-tri/nhd-edit/{id}', [nhdquantriController::class, 'nhdEdit'])->name('nhdadmin.nhdquantri.nhdedit');
Route::post('/nhd-admins/nhd-quan-tri/nhd-edit/{id}', [nhdquantriController::class, 'nhdEditSubmit'])->name('nhdadmin.nhdquantri.nhdEditSubmit');
//delete
// Đảm bảo sử dụng phương thức POST để gọi route xóa sản phẩm
Route::get('/nhd-admins/nhd-quan-tri/nhd-delete/{id}', [nhdquantriController::class, 'nhdDelete'])->name('nhdadmin.nhdquantri.nhddelete');



// san pham
// list
use App\Http\Controllers\nhdsanphamController;
Route::get('/nhd-admins/nhdsanpham',[nhdsanphamController::class,'nhdList'])->name('nhdadims.nhdsanpham');
//create
// Route để hiển thị form tạo mới sản phẩm
Route::get('/nhd-admins/nhdsanpham/create', [nhdsanphamController::class, 'nhdCreate'])->name('nhdadmins.nhdsanpham.nhdCreate');
// Route để xử lý form tạo mới sản phẩm
Route::post('/nhd-admins/nhdsanpham/nhd-create', [nhdsanphamController::class, 'nhdCreateSubmit'])->name('nhdadmins.nhdsanpham.nhdCreateSubmit');
//detail
Route::get('/nhd-admins/nhdsanpham/nhd-detail/{id}', [nhdsanphamController::class, 'nhdDetail'])->name('nhdadmins.nhdsanpham.nhdDetail');
// Hiển thị form chỉnh sửa sản phẩm
Route::get('/nhd-admins/nhdsanpham/nhd-edit/{id}', [nhdsanphamController::class, 'nhdEdit'])->name('nhdadmins.nhdsanpham.nhdedit');
// Xử lý cập nhật sản phẩm
Route::post('/nhd-admins/nhdsanpham/nhd-edit/{id}', [nhdsanphamController::class, 'nhdEditSubmit'])->name('nhdadmins.nhdsanpham.nhdEditSubmit');
Route::put('/nhdsanpham/{id}', [nhdsanphamController::class, 'update'])->name('nhdsanpham.update');
//delete
// Đảm bảo sử dụng phương thức POST để gọi route xóa sản phẩm
Route::get('/nhd-admins/nhdsanpham/nhd-delete/{id}', [nhdsanphamController::class, 'nhddelete'])->name('nhdadmins.nhdsanpham.nhddelete');


// chi tiết hóa đơn
// list
use App\Http\Controllers\nhdcthoadonController;
Route::get('/nhd-admins/nhdcthoadon',[nhdcthoadonController::class,'nhdList'])->name('nhdadims.nhdcthoadon');
//create
Route::get('/nhd-admins/nhdcthoadon/nhd-create',[nhdcthoadonController::class,'nhdCreate'])->name('nhdadmin.nhdcthoadon.nhdcreate');
Route::post('/nhd-admins/nhdcthoadon/nhd-create',[nhdcthoadonController::class,'nhdCreateSunmit'])->name('nhdadmin.nhdcthoadon.nhdCreateSunmit');
// edit
Route::get('/nhd-admins/nhdcthoadon/nhd-edit/{id}',[nhdcthoadonController::class,'nhdEdit'])->name('nhdadmin.nhdcthoadon.nhdEdit');
Route::post('/nhd-admins/nhdcthoadon/nhd-edit',[nhdcthoadonController::class,'nhdEditSubmit'])->name('nhdadmin.nhdcthoadon.nhdEditSubmit');
// detail
Route::get('/nhd-admins/nhdcthoadon/nhd-detail/{id}',[nhdcthoadonController::class,'nhdGetDetail'])->name('nhdadmin.nhdcthoadon.nhdGetDetail');
// delete
Route::get('/nhd-admins/nhdcthoadon/nhd-delete/{id}',[nhdcthoadonController::class,'nhdDelete'])->name('nhdadmin.nhdcthoadon.nhdDelete');


use App\Http\Controllers\nhddanhsachquantriController;
#admins - route--------------------------------------------------------------------------------------------------------------------------------------
route::get('/nhd-admins',function(){
    return view('nhdadmins.index');
});
#admins - danh muc--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/nhd-admins/nhddanhsachquantri/nhddanhmuc',[nhddanhsachquantriController::class,'danhmuc'])->name('nhdadmins.nhddanhsachquantri.danhmuc');
#admins - tin tức --------------------------------------------------------------------------------------------------------------------------------------
Route::get('/nhd-admins/nhddanhsachquantri/nhdtintuc',[nhddanhsachquantriController::class,'tintuc'])->name('nhdadmins.nhddanhsachquantri.danhmuc.tintuc');
// Sản phẩm--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/nhd-admins/nhddanhsachquantri/nhdsanpham',[nhddanhsachquantriController::class,'sanpham'])->name('nhdadmins.nhddanhsachquantri.danhmuc.sanpham');
// Mô tả sản phẩm--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/nhd-admins/nhddanhsachquantri/nhdmota/{id}',[nhddanhsachquantriController::class,'mota'])->name('nhdadmins.nhddanhsachquantri.danhmuc.mota');
#admins - nguoidung--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/nhd-admins/nhddanhsachquantri/nhdnguoidung',[nhddanhsachquantriController::class,'nguoidung'])->name('nhdadmins.nhddanhsachquantri.nguoidung');


use App\Http\Controllers\nhdkhachhangController;
// khach hang--------------------------------------------------------------------------------------------------------------------------------------
// list
Route::get('/nhd-admins/nhd-khach-hang',[nhdkhachhangController::class,'nhdList'])->name('nhdadmins.nhdkhachhang');
//detail
Route::get('/nhd-admins/nhd-khach-hang/nhd-detail/{id}', [nhdkhachhangController::class, 'nhdDetail'])->name('nhdadmin.nhdkhachhang.nhdDetail');
//create
Route::get('/nhd-admins/nhd-khach-hang/nhd-create',[nhdkhachhangController::class,'nhdCreate'])->name('nhdadmin.nhdkhachhang.nhdcreate');
Route::post('/nhd-admins/nhd-khach-hang/nhd-create',[nhdkhachhangController::class,'nhdCreateSubmit'])->name('nhdadmin.nhdkhachhang.nhdCreateSubmit');
//edit
Route::get('/nhd-admins/nhd-khach-hang/nhd-edit/{id}', [nhdkhachhangController::class, 'nhdEdit'])->name('nhdadmin.nhdkhachhang.nhdedit');
Route::post('/nhd-admins/nhd-khach-hang/nhd-edit/{id}', [nhdkhachhangController::class, 'nhdEditSubmit'])->name('nhdadmin.nhdkhachhang.nhdEditSubmit');
//delete
// Đảm bảo sử dụng phương thức POST để gọi route xóa sản phẩm
Route::get('/nhd-admins/nhd-khach-hang/nhd-delete/{id}', [nhdkhachhangController::class, 'nhdDelete'])->name('nhdadmin.nhdkhachhang.nhddelete');



use App\Http\Controllers\nhdhoadonController;
// Hóa Đơn--------------------------------------------------------------------------------------------------------------------------------------
// list
Route::get('/nhd-admins/nhd-hoa-don',[nhdhoadonController::class,'nhdList'])->name('nhdadmins.nhdhoadon');
//detail
Route::get('/nhd-admins/nhd-hoa-don/nhd-detail/{id}', [nhdhoadonController::class, 'nhdDetail'])->name('nhdadmin.nhdhoadon.nhdDetail');
//create
Route::get('/nhd-admins/nhd-hoa-don/nhd-create',[nhdhoadonController::class,'nhdCreate'])->name('nhdadmin.nhdhoadon.nhdcreate');
Route::post('/nhd-admins/nhd-hoa-don/nhd-create',[nhdhoadonController::class,'nhdCreateSubmit'])->name('nhdadmin.nhdhoadon.nhdCreateSubmit');
//edit
Route::get('/nhd-admins/nhd-hoa-don/nhd-edit/{id}', [nhdhoadonController::class, 'nhdEdit'])->name('nhdadmin.nhdhoadon.nhdedit');
Route::post('/nhd-admins/nhd-hoa-don/nhd-edit/{id}', [nhdhoadonController::class, 'nhdEditSubmit'])->name('nhdadmin.nhdhoadon.nhdEditSubmit');
//delete
// Đảm bảo sử dụng phương thức POST để gọi route xóa sản phẩm
Route::get('/nhd-admins/nhd-hoa-don/nhd-delete/{id}', [nhdhoadonController::class, 'nhdDelete'])->name('nhdadmin.nhdhoadon.nhddelete');



