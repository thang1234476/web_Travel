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
        Schema::create('tour_dia_diem', function (Blueprint $table) {
            $table->unsignedBigInteger('ma_tour');
            $table->unsignedBigInteger('ma_dia_diem');
            $table->foreign('ma_tour')->references('ma_tour')->on('tour_du_lich')->onDelete('cascade');
            $table->foreign('ma_dia_diem')->references('ma_dia_diem')->on('dia_diem')->onDelete('cascade');
            $table->primary(['ma_tour', 'ma_dia_diem']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_dia_diem');
    }
};
