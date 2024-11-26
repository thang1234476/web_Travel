<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\dat_tour;
use Illuminate\Http\Request;

class BookingTourController extends Controller
{
    //
    public function index()
    {
        $datTours = dat_tour::with(['user', 'tourDuLich'])->get();
        return view('admin.list_booking', compact('datTours'));
    }

    public function delete_bill($ma_dat_tour)
    {
        $datTour = dat_tour::findOrFail($ma_dat_tour);
        $datTour->delete();
        return redirect()->route('list_booking')->with('success', 'Hóa đơn đã được xóa thành công!');
    }
    public function thanh_toan(Request $request)
    {


        $trangThai = $request->input('trang_thai_thanh_toan');


        $query = dat_tour::with(['user', 'tourDuLich']);
        if ($trangThai !== null) {
            $query->where('trang_thai_thanh_toan', $trangThai);
        }


        $datTours = $query->get();


        return view('admin.list_booking', compact('datTours', 'trangThai'));
    }


    public function duyet($ma_dat_tour)
    {
        $duyet = dat_tour::findOrFail($ma_dat_tour);
        $duyet->trang_thai_thanh_toan = 'da_thanh_toan';
        $duyet->save();
        return redirect()->route('list_booking')
            ->with('success', 'Hóa đơn đã được duyệt!');
    }



}
