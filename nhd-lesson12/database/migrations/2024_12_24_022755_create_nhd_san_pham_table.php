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
        Schema::create('nhd_san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('nhdMaSanPham',255)->unique();
            $table->string('nhdTenSanPham',255);
            $table->string('nhdHinhAnh',255);
            $table->Integer('nhdSoLuong');
            $table->float('nhdDonGia');
            $table->bigInteger('nhdMaLoai')->references('id')->on('nhd_san_pham');
            $table->tinyInteger('nhdTrangThai');
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