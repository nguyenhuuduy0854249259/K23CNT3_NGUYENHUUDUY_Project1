<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhdloaisanpham extends Model
{
    use HasFactory;
    protected $table = 'nhd_loai_san_pham'; //ten cơ sở dữ liệu
    protected $primaryKey = 'id';
    public $incrementing = false; // Nếu  không phải là auto-increment
    public $timestamps = true; // Đảm bảo là 'true' nếu bạn sử dụng timestamps
}
