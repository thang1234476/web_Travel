<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dia_diem extends Model
{
    protected $table = 'dia_diem';

    // Tắt tự động cập nhật cột thời gian
    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'ten_dia_diem', 'mo_ta', 'hinh_anh', 'lien_ket_ban_do',
    ];

    public function tourDiaDiem()
    {
        return $this->hasMany(TourDiaDiem::class, 'ma_dia_diem', 'id');
    }

    public function noiDungBaiViet()
    {
        return $this->hasMany(NoiDungBaiViet::class, 'dia_diem_id', 'id');
    }
    public function locations()
    {
        return $this->hasMany(dia_diem::class, 'dia_diem_id', 'id');
    }

}