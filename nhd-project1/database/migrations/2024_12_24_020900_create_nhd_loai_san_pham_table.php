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
        Schema::create('nhd_loai_san_pham', function (Blueprint $table) {
            $table->id(); // ID tự động tăng
            $table->string('nhdMaLoai', 10)->unique()->comment('Mã loại sản phẩm'); // Mã loại duy nhất
            $table->string('nhdTenLoai', 255)->comment('Tên loại sản phẩm');
            $table->tinyInteger('nhdTrangThai')->default(0)->comment('0: Hiển thị, 1: Khóa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhd_loai_san_pham');
    }
};

