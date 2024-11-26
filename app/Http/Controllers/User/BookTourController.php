<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\dat_tour;
use Auth;
use DB;
use Illuminate\Http\Request;
use App\Models\TourDuLich;

class BookTourController extends Controller
{

    public function paymentPage(Request $request)
    {
        $tourId = $request->query('tour_id');
        if (!$tourId) {
            abort(404, 'Không tìm thấy ID của tour!');
        }

        $tour = TourDuLich::where('ma_tour', $tourId)->first();
        if (!$tour) {
            abort(404, 'Tour không tồn tại!');
        }

        $adultCount = max(1, (int) $request->query('adult_count', 1));
        $totalPrice = max(0, (int) $request->query('total_price', 0));

        return view('user.payShow', compact('tour', 'adultCount', 'totalPrice'));
    }
    public function processPayment(Request $request)
    {
        $validated = $request->validate([
            'ma_tour' => 'required',
            'ngay_dat' => 'required',
            'so_nguoi' => 'required',
            'tong_tien' => 'required',
        ]);

        $model = new dat_tour();
        $model->user_id = Auth::id();
        $model->ma_tour = $validated['ma_tour'];
        $model->ngay_dat = $validated['ngay_dat'];
        $model->so_nguoi = $validated['so_nguoi'];
        $model->tong_tien = $validated['tong_tien'];
        $model->save(); 
        // Lưu thông báo thành công vào session
        return redirect()->route('home')->with('success', 'Đặt hàng thành công!');
    }


}
