<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhdkhachhang extends Model
{
    use HasFactory;
    protected $table = 'nhd_khach_hang';// Thay đổi tên bảng cho phù hợp với tên bảng trong cơ sở dữ liệu
    protected $primaryKey = 'id';
    public $incrementing = false; // Nếu vtdnhacc không phải là auto-increment
    public $timestamps = true; // Đảm bảo là 'true' nếu bạn sử dụng timestamps
     // Chỉ định các trường ngày tháng sẽ tự động chuyển thành đối tượng Carbon
     protected $dates = ['nhdNgayDangKy'];
}