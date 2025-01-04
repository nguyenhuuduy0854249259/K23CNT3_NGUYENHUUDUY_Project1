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
        Schema::create('nhd_quan_tri', function (Blueprint $table) {
            $table->id();
            $table->string('nhdTaiKhoan',255)->unique();
            $table->string('nhdMatKhau',255);
            $table->tinyInteger('nhdTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhd_quan_tri');
    }
};
