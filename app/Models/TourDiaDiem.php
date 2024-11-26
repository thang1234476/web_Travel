<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;


class TourDiaDiem extends Pivot
{
    protected $table = 'tour_dia_diem';
    public $timestamps = false;
    
    protected $fillable = [
        'ma_tour',
        'ma_dia_diem'
    ];
}