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
            $table->string('nhdMaHoaDon',255)->unique();
            $table->bigInteger('nhdMaKhachHang')->references('id')->on('nhd_hoa_don');
            $table->date('nhdNgayHoaDon');
            $table->date('nhdNgayNhan');
            $table->string('nhdHoTenKhachHang',255);
            $table->string('nhdEmail',255);
            $table->string('nhdDienThoai',255);
            $table->string('nhdDiaChi',255);
            $table->float('nhdTongGiaTri');
            $table->tinyInteger('nhdTrangThai');
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