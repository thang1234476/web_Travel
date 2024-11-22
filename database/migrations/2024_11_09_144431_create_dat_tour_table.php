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
        Schema::create('dat_tour', function (Blueprint $table) {
            $table->bigIncrements('ma_dat_tour');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('ma_tour');
            $table->timestamp('ngay_dat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('so_nguoi');
            $table->decimal('tong_tien', 10, 2);
            $table->enum('trang_thai_thanh_toan', ['chua_thanh_toan', 'da_thanh_toan', 'da_hoan_tien'])->default('chua_thanh_toan');
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ma_tour')->references('ma_tour')->on('tour_du_lich')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dat_tour');
    }
};
