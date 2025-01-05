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
    Schema::create('nhd_ct_hoa_don', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('nhdHoaDonID')->comment('Mã hóa đơn');
        $table->foreign('nhdHoaDonID')->references('id')->on('nhd_hoa_don')->onDelete('cascade');
        $table->unsignedBigInteger('nhdSanPhamID')->comment('Mã sản phẩm');
        $table->foreign('nhdSanPhamID')->references('id')->on('nhd_san_pham')->onDelete('cascade');
        $table->integer('nhdSoLuongMua')->comment('Số lượng mua');
        $table->decimal('nhdDonGiaMua', 15, 2)->comment('Đơn giá mua');
        $table->decimal('nhdThanhTien', 15, 2)->comment('Thành tiền');
        $table->tinyInteger('nhdTrangThai')->default(0)->comment('0: Chưa xử lý, 1: Đã xử lý');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhd_ct_hoa_don');
    }
};
/*



*/