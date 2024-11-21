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
        Schema::create('tour_du_lich', function (Blueprint $table) {
            $table->bigIncrements('ma_tour');
            $table->string('TenTour');
            $table->decimal('gia', 10, 3);
            $table->string('hinhanh');
            $table->date('ngay_bat_dau');
            $table->date('ngay_ket_thuc');
            $table->string('diem_khoi_hanh');
            $table->time('gio_khoi_hanh');
            $table->integer('so_nguoi');
            $table->enum('trang_thai', ['con_cho', 'het_cho', 'da_huy'])->default('con_cho');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_du_lich');
    }
};
