<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dat_tour extends Model
{
    //
    protected $table = 'dat_tour';

    protected $primaryKey = 'ma_dat_tour';

    // Tắt tự động cập nhật cột thời gian
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }

    public function tourDuLich()
    {
        return $this->belongsTo(TourDuLich::class, 'ma_tour', 'ma_tour');
    }
}
