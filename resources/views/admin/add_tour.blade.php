@extends('layouts.admin.index')
@section('content')
<style>
    .tour {
        background-color: #0dc8d5;
        font-weight: bold;
    }
</style>
<div class="container-diadiem">
    <form action="{{ route('add_tour_post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="TenTour">Tên tour *</label>
            <input type="text" id="TenTour" name="TenTour" class="form-control @error('TenTour') is-invalid @enderror"
                value="{{ old('TenTour') }}">
            @error('TenTour')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="hinhanh">Hình ảnh</label>
            <input type="file" 
                   id="hinhanh" 
                   name="hinhanh" 
                   class="form-control @error('hinhanh') is-invalid @enderror"
                   accept="image/*">
            @error('hinhanh')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="gia">Giá (VNĐ)</label>
            <input type="number" 
                   id="gia" 
                   name="gia" 
                   class="form-control @error('gia') is-invalid @enderror"
                   value="{{ old('gia') }}"
                   min="0">
            @error('gia')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="ngay_bat_dau">Ngày bắt đầu</label>
            <input type="date" 
                   id="ngay_bat_dau" 
                   name="ngay_bat_dau" 
                   class="form-control @error('ngay_bat_dau') is-invalid @enderror"
                   value="{{ old('ngay_bat_dau') }}">
            @error('ngay_bat_dau')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="ngay_ket_thuc">Ngày kết thúc</label>
            <input type="date" 
                   id="ngay_ket_thuc" 
                   name="ngay_ket_thuc" 
                   class="form-control @error('ngay_ket_thuc') is-invalid @enderror"
                   value="{{ old('ngay_ket_thuc') }}">
            @error('ngay_ket_thuc')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="diem_khoi_hanh">Điểm khởi hành</label>
            <input type="text" 
                   id="diem_khoi_hanh" 
                   name="diem_khoi_hanh" 
                   class="form-control @error('diem_khoi_hanh') is-invalid @enderror"
                   value="{{ old('diem_khoi_hanh') }}">
            @error('diem_khoi_hanh')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="gio_khoi_hanh">Giờ khởi hành</label>
            <input type="time" 
                   id="gio_khoi_hanh" 
                   name="gio_khoi_hanh" 
                   class="form-control @error('gio_khoi_hanh') is-invalid @enderror"
                   value="{{ old('gio_khoi_hanh') }}">
            @error('gio_khoi_hanh')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="so_nguoi">Số người</label>
            <input type="number" 
                   id="so_nguoi" 
                   name="so_nguoi" 
                   class="form-control @error('so_nguoi') is-invalid @enderror"
                   value="{{ old('so_nguoi') }}"
                   min="1">
            @error('so_nguoi')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="trang_thai">Trạng thái</label>
            <select id="trang_thai" 
                    name="trang_thai" 
                    class="form-control @error('trang_thai') is-invalid @enderror">
                <option value="">Chọn trạng thái</option>
                <option value="con_cho" {{ old('trang_thai') == 'con_cho' ? 'selected' : '' }}>Còn chỗ</option>
                <option value="het_cho" {{ old('trang_thai') == 'het_cho' ? 'selected' : '' }}>Hết chỗ</option>
                <option value="da_huy" {{ old('trang_thai') == 'da_huy' ? 'selected' : '' }}>Đã hủy</option>
            </select>
            @error('trang_thai')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn">Create</button>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </form>
</div>
@endsection