<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NoiDungBaiViet extends Model
{
    protected $table = 'noi_dung_bai_viet';

    protected $primaryKey = 'bai_viet_id';

    public $timestamps = false;

    public function baiviet()
    {
        return $this->belongsTo(dia_diem::class);
    }
    protected $fillable = [
        'dia_diem_id',    // Thêm trường này vào
        'loai_noi_dung',
        'du_lieu_noi_dung',
        'ten_noi_dung',
        'anh_phu',
        'thu_tu_noi_dung',
    ];


    public function diaDiem()
    {
        return $this->belongsTo(dia_diem::class, 'dia_diem_id', 'id');
    }

}