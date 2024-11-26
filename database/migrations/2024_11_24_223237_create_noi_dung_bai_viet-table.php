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
        Schema::create('noi_dung_bai_viet', function (Blueprint $table) {
            $table->increments('bai_viet_id')->primary(); // Khóa chính cho bảng bài viết
            $table->unsignedInteger('dia_diem_id'); // Thêm cột khóa ngoại
            $table->enum('loai_noi_dung', ['text', 'image', 'video']);
            $table->text('du_lieu_noi_dung')->nullable();
            $table->string('ten_noi_dung', 255)->nullable();
            $table->string('anh_phu', 255)->nullable();
            $table->integer('thu_tu_noi_dung');
            $table->timestamps();

            // Khóa ngoại liên kết đến bảng dia_diem
            $table->foreign('dia_diem_id')
                ->references('id')
                ->on('dia_diem')
                ->onDelete('cascade'); // Xóa bài viết nếu địa điểm bị xóa
        });

    }

    public function down()
    {
        Schema::dropIfExists('noi_dung_bai_viet');
    }
};
