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
        if (!Schema::hasTable('nhdnhacc')) { // Kiểm tra bảng trước khi tạo
            Schema::create('nhdnhacc', function (Blueprint $table) {
                $table->string('nhdMaNCC')->primary();
                $table->string('nhdTenNCC');
                $table->string('nhdDiachi');
                $table->string('nhdDienthoai');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhdnhacc');
    }
};
