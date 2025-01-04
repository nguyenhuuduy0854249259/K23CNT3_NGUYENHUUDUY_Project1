<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhdquantri extends Model
{
    use HasFactory;
    
    protected $table='nhd_quan_tri';        // Tên bảng trong cơ sở dữ liệu

    // Chỉ định các cột có thể gán (mass assignable)
    protected $fillable = ['nhdTaiKhoan', 'nhdMatKhau', 'nhdTrangThai'];

    // Tắt timestamp nếu không cần
    public $timestamps = false;

}
