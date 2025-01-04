<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhdquantri extends Model
{
    use HasFactory;
    
    protected $table = 'nhd_quan_tri'; // Tên bảng trong cơ sở dữ liệu
    protected $fillable = ['nhdTaiKhoan', 'nhdMatKhau', 'nhdTrangThai'];
    public $timestamps = false; // Nếu bảng không sử dụng timestamps

}
