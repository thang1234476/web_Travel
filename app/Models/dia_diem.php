<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dia_diem extends Model
{
    //
    protected $table = 'dia_diem';

    // Tắt tự động cập nhật cột thời gian
    public $timestamps = false;

    protected $primaryKey = 'ma_dia_diem';
}
