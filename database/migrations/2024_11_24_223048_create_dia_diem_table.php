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
        Schema::create('dia_diem', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_dia_diem', 255);
            $table->text('mo_ta')->nullable();
            $table->string('hinh_anh', 255)->nullable();
            $table->string('lien_ket_ban_do', 255)->nullable();
            $table->timestamps();
        });
        

    }

    public function down()
    {
        Schema::dropIfExists('dia_diem');
    }
};
