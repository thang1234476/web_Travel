<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourDuLich extends Model
{
    //
    protected $table = 'tour_du_lich';
    protected $primaryKey = 'ma_tour';
    // Tắt tự động cập nhật cột thời gian
    protected $fillable = [
        'TenTour',
        'gia',
        'ngay_bat_dau',
        'ngay_ket_thuc',
        'diem_khoi_hanh',
        'gio_khoi_hanh',
        'so_nguoi',
        'trang_thai'
    ];
}
