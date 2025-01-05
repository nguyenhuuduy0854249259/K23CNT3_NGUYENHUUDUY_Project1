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
    Schema::create('nhd_hoa_don', function (Blueprint $table) {
        $table->id();
        $table->string('nhdMaHoaDon', 255)->unique()->comment('Mã hóa đơn');
        $table->unsignedBigInteger('nhdMaKhachHang')->comment('Mã khách hàng');
        $table->foreign('nhdMaKhachHang')->references('id')->on('nhd_khach_hang')->onDelete('cascade');
        $table->date('nhdNgayHoaDon')->comment('Ngày tạo hóa đơn');
        $table->date('nhdNgayNhan')->comment('Ngày nhận hàng');
        $table->string('nhdHoTenKhachHang', 255)->comment('Họ tên khách hàng nhận');
        $table->string('nhdEmail', 255)->comment('Email khách hàng nhận');
        $table->string('nhdDienThoai', 255)->comment('Số điện thoại khách hàng nhận');
        $table->string('nhdDiaChi', 255)->comment('Địa chỉ nhận hàng');
        $table->decimal('nhdTongGiaTri', 15, 2)->comment('Tổng giá trị hóa đơn');
        $table->tinyInteger('nhdTrangThai')->default(0)->comment('0: Chưa xử lý, 1: Đã xử lý');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhd_hoa_don');
    }
};