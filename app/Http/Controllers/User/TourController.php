<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourDuLich;

class TourController extends Controller
{
    //
    public function index($view = 'user.home')
    {
        $tours = TourDuLich::all(); // Lấy tất cả các tour từ cơ sở dữ liệu
        return view($view, compact('tours')); // Truyền $tours vào view
    }
}
