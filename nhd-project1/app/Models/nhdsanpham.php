<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhdsanpham extends Model
{
    use HasFactory;

    protected $table = 'nhd_san_pham';
    protected $fillable = [
        'nhdMaSanPham',
        'nhdTenSanPham',
        'nhdHinhAnh',
        'nhdSoLuong',
        'nhdDonGia',
        'nhdMaLoai',
        'nhdTrangThai',
    ];
    protected $primaryKey = 'id';
    public $incrementing = false; // Nếu nhdnhacc không phải là auto-increment
    public $timestamps = true; // Đảm bảo là 'true' nếu bạn sử dụng timestamps
}