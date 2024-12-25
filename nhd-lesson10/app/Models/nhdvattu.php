<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhdVattu extends Model
{
    use HasFactory;
    protected $table = "nhdvattu";
    protected $primaryKey = 'nhdMavtu'; // Đặt khóa chính
    public $incrementing = false; // Nếu nhdManhu không phải là auto-increment
    
    public $timestamps = false;
}