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
            $table->bigInteger('nhdHoaDonID')->references('id')->on('nhd_hoa_don');
            $table->bigInteger('nhdSanPhamID')->references('id')->on('nhd_san_pham');
            $table->integer('nhdSoLuongMua');
            $table->float('nhdDonGiaMua');
            $table->double('nhdThanhTien');
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