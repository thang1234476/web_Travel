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
        Schema::create('dat_tour', function (Blueprint $table) {
            $table->unsignedBigInteger('ma_dat_tour')->autoIncrement();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('ma_tour');
            $table->timestamp('ngay_dat');
            $table->integer('so_nguoi');
            $table->decimal('tong_tien', 10, 2);
            $table->enum('trang_thai_thanh_toan', ['chua_thanh_toan', 'da_thanh_toan', 'da_hoan_tien']);
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->foreign('ma_tour')
                  ->references('ma_tour')
                  ->on('tour_du_lich')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dat_tour');
    }
};
