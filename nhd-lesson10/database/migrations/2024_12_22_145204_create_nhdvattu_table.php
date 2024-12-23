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
        // Kiểm tra xem bảng đã tồn tại chưa trước khi tạo
        if (!Schema::hasTable('nhdvattu')) {
            Schema::create('nhdvattu', function (Blueprint $table) {
                $table->string('nhdMavtu')->primary();
                $table->string('nhdTenVTu')->unique();
                $table->string('nhdDvtinh');
                $table->float('nhdPhantram'); // Đã xóa khoảng trắng thừa
                $table->timestamps(); // Thêm timestamps nếu cần
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhdvattu');
    }
};
