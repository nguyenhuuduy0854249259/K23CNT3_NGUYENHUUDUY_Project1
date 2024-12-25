<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nhd_khach_hang', function (Blueprint $table) {
            $table->id();
            $table->string('nhdMaKhachHang',255)->unique();
            $table->string('nhdHoTenKhachHang',255);
            $table->string('nhdEmail',255);
            $table->string('nhdMatKhau',255);
            $table->string('nhdDienThoai',255);
            $table->string('nhdDiaChi',255);
            $table->date('nhdNgayDangKy');
            $table->tinyInteger('nhdTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhd_khach_hang');
    }
};