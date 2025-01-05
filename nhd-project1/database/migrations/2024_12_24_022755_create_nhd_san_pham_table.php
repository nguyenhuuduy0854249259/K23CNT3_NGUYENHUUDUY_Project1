<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('nhd_san_pham', function (Blueprint $table) {
        $table->id();
        $table->string('nhdMaSanPham')->comment('Mã sản phẩm');
        $table->string('nhdTenSanPham')->comment('Tên sản phẩm');
        $table->string('nhdHinhAnh')->comment('Hình ảnh sản phẩm');
        $table->integer('nhdSoLuong')->comment('Số lượng sản phẩm');
        $table->decimal('nhdDonGia', 15, 2)->comment('Đơn giá sản phẩm');
        $table->string('nhdMaLoai', 10)->comment('Mã loại sản phẩm');
        $table->tinyInteger('nhdTrangThai')->default(0)->comment('0: Hiển thị, 1: Khóa');
        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhd_san_pham');
    }
};