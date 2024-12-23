<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhdpXuat extends Model
{
    use HasFactory;
    protected $table = "nhdpxuat";
    protected $primaryKey = 'nhdSoPx'; // Đặt khóa chính
    public $incrementing = false; // Nếu nhdnhacc không phải là auto-increment
    public $timestamps = false;
    
}