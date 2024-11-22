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
        Schema::create('danh_gia', function (Blueprint $table) {
            $table->bigIncrements('ma_danh_gia');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('ma_dat_tour');
            $table->integer('diem_danh_gia')->check('diem_danh_gia >= 1 AND diem_danh_gia <= 5');
            $table->text('noi_dung')->nullable();
            $table->timestamp('ngay_danh_gia')->default(DB::raw('CURRENT_TIMESTAMP'));
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ma_dat_tour')->references('ma_dat_tour')->on('dat_tour')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('danh_gia');
    }
};
