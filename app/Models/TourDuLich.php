<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourDuLich extends Model
{
    protected $table = 'tour_du_lich';
    protected $primaryKey = 'ma_tour';
    
    protected $fillable = [
        'ten_tour',
        'gia',
        'hinh_anh',
        'ngay_bat_dau',
        'ngay_ket_thuc',
        'diem_khoi_hanh',
        'gio_khoi_hanh',
        'so_nguoi',
        'trang_thai'
    ];

    protected $casts = [
        'ngay_bat_dau' => 'date',
        'ngay_ket_thuc' => 'date',
        'gia' => 'decimal:3',
        'trang_thai' => 'string'
    ];

    // Relationship với địa điểm
    public function diaDiems()
    {
        return $this->belongsToMany(dia_diem::class, 'tour_dia_diem', 'ma_tour', 'ma_dia_diem', 'mo_ta');
    }

    // Relationship với đặt tour
    public function datTours()
    {
        return $this->hasMany(dat_tour::class, 'ma_tour');
    }
}