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
            $table->string('nhdMaKhachHang')->unique()->comment('Mã khách hàng');
            $table->string('nhdKhachHang', 255)->nullable()->unique()->comment('Tài khoản khách hàng');
            $table->string('nhdHoTenKhachHang', 255)->comment('Họ tên khách hàng');
            $table->string('nhdEmail', 255)->unique()->comment('Email khách hàng');
            $table->string('nhdMatKhau', 255)->comment('Mật khẩu khách hàng');
            $table->string('nhdDienThoai', 255)->comment('Số điện thoại');
            $table->string('nhdDiaChi', 255)->comment('Địa chỉ khách hàng');
            $table->date('nhdNgayDangKy')->comment('Ngày đăng ký');
            $table->tinyInteger('nhdTrangThai')->default(0)->comment('0: Hoạt động, 1: Bị khóa');
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
