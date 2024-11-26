<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tour_dia_diem', function (Blueprint $table) {
            $table->unsignedBigInteger('ma_tour');
            $table->unsignedInteger('ma_dia_diem');
            
            $table->primary(['ma_tour', 'ma_dia_diem']);
            
            $table->foreign('ma_tour')
                  ->references('ma_tour')
                  ->on('tour_du_lich')
                  ->onDelete('cascade');
            $table->foreign('ma_dia_diem')
                  ->references('id')
                  ->on('dia_diem')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tour_dia_diem');
    }
};
