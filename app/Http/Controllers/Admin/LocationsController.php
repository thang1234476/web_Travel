<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\dia_diem;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    public function index()
    {
        $data = dia_diem::all();
        return view('admin.list_diadiem', compact('data'));
    }

    public function show_add_diadiem()
    {
        return view('admin.add_diadiem');
    }

    public function add_diadiem(Request $request)
    {
        $validatedData = $request->validate([
            'TenDD' => 'required|string|max:255',
            'diachi' => 'required|string|max:255',
            'hinhanh' => 'required|string|max:255',
            'mota' => 'required|string|max:255',
        ]);

        $model = new dia_diem();
        $model->ten_dia_diem = $validatedData['TenDD'];
        $model->dia_chi = $validatedData['diachi'];
        $model->duong_dan_anh = $validatedData['hinhanh'];
        $model->mo_ta = $validatedData['mota'];
        $model->save();
        return redirect()->route('list_diadiem')->with('success', 'Dữ liệu đã được lưu thành công.');
    }

    public function update(Request $request, $ma_dia_diem)
    {
        $request->validate([
            'TenDD' => 'max:255',
            'mota' => 'max:255',
            'hinhanh' => 'max:255',
            'diachi' => 'max:255',
        ]);

        // Tìm và cập nhật dữ liệu
        $diadiem = dia_diem::findOrFail($ma_dia_diem);
        $diadiem->ten_dia_diem = $request->input('TenDD');
        $diadiem->mo_ta = $request->input('mota');
        $diadiem->duong_dan_anh = $request->input('hinhanh');
        $diadiem->dia_chi = $request->input('diachi');
        $diadiem->save();

        return redirect()->route('list_diadiem')->with('success', 'Cập nhật thành công!');
    }



    public function edit($ma_dia_diem)
    {
        $diadiem = dia_diem::findOrFail($ma_dia_diem);
        return view('admin.edit_diadiem', compact('diadiem'));
    }

    public function delete_locations($ma_dia_diem)
    {
        $location = dia_diem::findOrFail($ma_dia_diem);
        $location->delete();
        return redirect()->route('list_diadiem')->with('success', 'Địa điểm đã được xóa thành công!');
    }
}
