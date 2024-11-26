<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\dia_diem;
use App\Models\NoiDungBaiViet;
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
    public function store(Request $request)
    {
        // Validate dữ liệu đầu vào
        $validatedData = $request->validate([
            'TenDD' => 'required|string|max:255',
            'diachi' => 'required|string|max:255',
            'hinhanh' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'mota' => 'required|string|max:1000',
            'content_type' => 'required|array',
            'content_name' => 'required|array',
            'content_data' => 'required|array',
            'content_file.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        // Lưu hình ảnh chính
        $coverImagePath = $request->file('hinhanh')->store('uploads', 'public');


        // Tạo địa điểm mới
        $model = new dia_diem();
        $model->ten_dia_diem = $validatedData['TenDD'];
        $model->lien_ket_ban_do = $validatedData['diachi'];
        $model->hinh_anh = $coverImagePath;
        $model->mo_ta = $validatedData['mota'];
        $model->save(); // Lưu địa điểm vào cơ sở dữ liệu


        // Lấy id của địa điểm mới tạo
        $diaDiemId = $model->id; // Đây là cách lấy ID của địa điểm mới


        // Lưu các khối nội dung
        foreach ($validatedData['content_type'] as $index => $type) {
            $contentData = null;
            $contentFile = null;


            // Nếu là văn bản
            if ($type === 'text') {
                $contentData = $validatedData['content_data'][$index];
            }
            // Nếu là hình ảnh, kiểm tra và lưu ảnh
            if ($type === 'image' && isset($request->content_file[$index])) {
                // Lưu file hình ảnh phụ nếu có
                $contentFile = $request->file('content_file')[$index]->store('uploads', 'public');
            }


            // Tạo bản ghi cho từng khối nội dung
            NoiDungBaiViet::create([
                'dia_diem_id' => $diaDiemId, // Gắn kết với địa điểm
                'loai_noi_dung' => $type, // Kiểu nội dung (text hoặc image)
                'du_lieu_noi_dung' => $contentData, // Dữ liệu nội dung (văn bản)
                'ten_noi_dung' => $validatedData['content_name'][$index], // Tên hoặc chú thích
                'anh_phu' => $contentFile, // Hình ảnh phụ (nếu có)
                'thu_tu_noi_dung' => $index, // Thứ tự của khối nội dung
            ]);
        }


        // Trở lại và thông báo thành công
        return redirect()->route('list_diadiem')->with('success', 'Dữ liệu đã được lưu thành công.');
    }

}
