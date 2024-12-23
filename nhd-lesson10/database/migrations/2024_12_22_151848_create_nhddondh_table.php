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
        if (!Schema::hasTable('nhddondh')) { // Kiểm tra bảng trước khi tạo
            Schema::create('nhddondh', function (Blueprint $table) {
                $table->string('nhdSoDH')->primary();
                $table->date('nhdNgayDH');
                $table->string('nhdMaNCC');
                $table->foreign('nhdMaNCC')->references('nhdMaNCC')->on('nhdnhacc');
                //$table->id();
                //$table->timestamps();
            });
        }
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhddondh');
    }

};
