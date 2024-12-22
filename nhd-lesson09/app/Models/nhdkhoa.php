<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhdkhoa extends Model
{
    use HasFactory;
    protected $table = 'nhdkhoa'; // Nếu tên bảng khác với tên model

    public $timestamps = false; // Nếu không sử dụng các cột `created_at` và `updated_at`
}
