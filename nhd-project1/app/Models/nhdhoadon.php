<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhdhoadon extends Model
{
    use HasFactory;
    protected $table = 'nhd_hoa_don';// Thay đổi tên bảng cho phù hợp với tên bảng trong cơ sở dữ liệu
    protected $primaryKey = 'id';
    public $incrementing = false; // Nếu vtdnhacc không phải là auto-increment
    public $timestamps = true; // Đảm bảo là 'true' nếu bạn sử dụng timestamps
}