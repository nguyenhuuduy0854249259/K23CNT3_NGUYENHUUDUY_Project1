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
            $table->bigInteger('nhdHoaDonID')->unsigned();  // Thêm unsigned() cho khóa ngoại
            $table->foreign('nhdHoaDonID')->references('id')->on('nhd_hoa_don')->onDelete('cascade'); // Định nghĩa khóa ngoại

            $table->bigInteger('nhdSanPhamID')->unsigned(); // Thêm unsigned() cho khóa ngoại
            $table->foreign('nhdSanPhamID')->references('id')->on('nhd_san_pham')->onDelete('cascade'); // Định nghĩa khóa ngoại

            $table->integer('nhdSoLuongMua');
            $table->float('nhdDonGiaMua');
            $table->decimal('nhdThanhTien', 15, 2);  // Định nghĩa lại column này mà không cần change()
            $table->tinyInteger('nhdTrangThai');
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