<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BaiViet;
use App\Models\dia_diem;
use App\Models\NoiDungBaiViet;


class LocationController extends Controller
{
    public function index($view = 'user.location')
    {
        $location = dia_diem::select('id', 'ten_dia_diem', 'mo_ta', 'hinh_anh')->get();

        return view($view, compact('location'));
    }
    public function show($id)
    {
        $diaDiem = dia_diem::with([
            'noiDungBaiViet' => function ($query) {
                $query->orderBy('thu_tu_noi_dung', 'asc');
            }
        ])->findOrFail($id);

        return view('user.locationShow', compact('diaDiem'));
    }
}
