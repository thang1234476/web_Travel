<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dat_tour extends Model
{
    protected $table = 'dat_tour';
    protected $primaryKey = 'ma_dat_tour';
    
    protected $fillable = [
        'user_id',
        'ma_tour',
        'ngay_dat',
        'so_nguoi',
        'tong_tien',
        'trang_thai_thanh_toan'
    ];

    protected $casts = [
        'ngay_dat' => 'datetime',
        'tong_tien' => 'decimal:2',
        'trang_thai_thanh_toan' => 'string'
    ];

    // Relationship với user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // Relationship với tour du lịch
    public function tourDuLich()
    {
        return $this->belongsTo(TourDuLich::class, 'ma_tour', 'ma_tour');
    }
}

