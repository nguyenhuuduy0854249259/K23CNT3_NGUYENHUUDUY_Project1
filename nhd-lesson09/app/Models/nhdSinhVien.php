<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhdSinhvien extends Model
{
    use HasFactory;
    protected $table = 'nhdsinhvien';
    protected $primaryKey = 'NHDMASINHVIEN'; // Chỉ định cột khóa chính đúng
    public $timestamps = false;
}