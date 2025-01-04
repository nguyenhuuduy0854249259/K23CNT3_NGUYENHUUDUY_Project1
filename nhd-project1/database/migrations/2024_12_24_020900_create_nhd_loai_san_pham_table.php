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
            $table->id(); // Cột ID tự động
            $table->string('nhdMaLoai', 10)->unique(); // Cột mã loại
            $table->string('nhdTenLoai', 255);
            $table->tinyInteger('nhdTrangThai');
            $table->timestamps(); // Cột created_at và updated_at
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

