<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tour_du_lich', function (Blueprint $table) {
            $table->unsignedBigInteger('ma_tour')->autoIncrement();
            $table->string('ten_tour', 255);
            $table->decimal('gia', 10, 3);
            $table->string('hinh_anh', 255);
            $table->date('ngay_bat_dau');
            $table->date('ngay_ket_thuc');
            $table->string('diem_khoi_hanh', 255);
            $table->time('gio_khoi_hanh');
            $table->integer('so_nguoi');
            $table->enum('trang_thai', ['con_cho', 'het_cho', 'da_huy']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tour_du_lich');
    }
};
