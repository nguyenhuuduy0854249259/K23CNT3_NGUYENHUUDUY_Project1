<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhdNhaCC extends Model
{
    use HasFactory;
    
    protected $table = "nhdnhacc";
    protected $primaryKey = 'nhdMaNCC'; // Đặt khóa chính
    public $incrementing = false; // Nếu nhdnhacc không phải là auto-increment
    public $timestamps = false; // Đúng chính tả
}
