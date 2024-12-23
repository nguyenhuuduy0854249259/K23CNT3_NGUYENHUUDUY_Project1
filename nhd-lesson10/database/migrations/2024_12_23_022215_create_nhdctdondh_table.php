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
        Schema::create('nhdctdondh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('nhdSoDH');
            $table->string('nhdMaVTu');
            $table->integer('nhdSLDat');
            // Tạo khóa chính trên 2 cột (nhdSoDH, nhdMaVTu)
            $table->primary(['nhdSoDH','nhdMaVTu']);
            // Khóa ngoại
            $table->foreign('nhdSoDH')->references('nhdSoDH')->on('nhddondh');
            $table->foreign('nhdMaVTu')->references('nhdMaVTu')->on('nhdvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhdctdondh');
    }
};
