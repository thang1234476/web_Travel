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
        Schema::create('dia_diem', function (Blueprint $table) {
            $table->bigIncrements('ma_dia_diem');
            $table->string('ten_dia_diem');
            $table->text('mo_ta')->nullable();
            $table->string('duong_dan_anh')->nullable();
            $table->string('dia_chi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dia_diem');
    }
};
