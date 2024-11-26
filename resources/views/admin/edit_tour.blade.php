@extends('layouts.admin.index')
@section('content')
<style>
    .tour {
        background-color: #0dc8d5;
        font-weight: bold;
    }
    .error {
        color: red;
        font-size: 14px;
    }
</style>

<div class="container-diadiem">
    <form action="{{ route('edit_tour_post', $tour->ma_tour) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="TenTour">Tên tour</label>
            <input type="text" id="TenTour" name="TenTour" value="{{ old('TenTour', $tour->ten_tour) }}" class="form-control">
            @error('TenTour')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="hinhanh">Hình ảnh</label>
            <input type="file" id="hinhanh" name="hinhanh" class="form-control">
            @error('hinhanh')
                <span class="error">{{ $message }}</span>
            @enderror
            @if($tour->hinhanh)
                <img src="{{ Storage::url($tour->hinh_anh) }}" width="100" class="mt-2">
            @endif
        </div>

        <div class="form-group">
            <label for="gia">Giá</label>
            <input type="number" id="gia" name="gia" value="{{ old('gia', $tour->gia) }}" class="form-control">
            @error('gia')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="ngay_bat_dau">Ngày bắt đầu</label>
            <input type="date" id="ngay_bat_dau" name="ngay_bat_dau" 
                   value="{{ old('ngay_bat_dau', date('Y-m-d', strtotime($tour->ngay_bat_dau))) }}" 
                   class="form-control">
            @error('ngay_bat_dau')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="ngay_ket_thuc">Ngày kết thúc</label>
            <input type="date" id="ngay_ket_thuc" name="ngay_ket_thuc" 
                   value="{{ old('ngay_ket_thuc', date('Y-m-d', strtotime($tour->ngay_ket_thuc))) }}" 
                   class="form-control">
            @error('ngay_ket_thuc')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="diem_khoi_hanh">Điểm khởi hành</label>
            <input type="text" id="diem_khoi_hanh" name="diem_khoi_hanh" 
                   value="{{ old('diem_khoi_hanh', $tour->diem_khoi_hanh) }}" class="form-control">
            @error('diem_khoi_hanh')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="gio_khoi_hanh">Giờ khởi hành</label>
            <input type="time" id="gio_khoi_hanh" name="gio_khoi_hanh" 
                   value="{{ old('gio_khoi_hanh', date('H:i', strtotime($tour->gio_khoi_hanh))) }}" 
                   class="form-control">
            @error('gio_khoi_hanh')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="so_nguoi">Số người</label>
            <input type="number" id="so_nguoi" name="so_nguoi" 
                   value="{{ old('so_nguoi', $tour->so_nguoi) }}" class="form-control">
            @error('so_nguoi')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="trang_thai">Trạng thái</label>
            <select id="trang_thai" name="trang_thai" class="form-control">
                <option value="con_cho" {{ old('trang_thai', $tour->trang_thai) == 'con_cho' ? 'selected' : '' }}>
                    Còn chỗ
                </option>
                <option value="het_cho" {{ old('trang_thai', $tour->trang_thai) == 'het_cho' ? 'selected' : '' }}>
                    Hết chỗ
                </option>
                <option value="da_huy" {{ old('trang_thai', $tour->trang_thai) == 'da_huy' ? 'selected' : '' }}>
                    Đã hủy
                </option>
            </select>
            @error('trang_thai')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>

@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif
@endsection