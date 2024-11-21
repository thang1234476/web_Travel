@extends('layouts.admin.index')
@section('content')
<style>
    .dia_diem {
        background-color: #0dc8d5;
        font-weight: bold;
    }
</style>
<div class="container-diadiem">
    <form action="{{ route('edit_diadiem_post', $diadiem->ma_dia_diem) }}" method="POST">
        @csrf
        @method('PUT')

    <div class="form-group">
        <label for="TenDD">Tên địa điểm</label>
        <input type="text" id="TenDD" name="TenDD" value="{{ old('TenDD', $diadiem->ten_dia_diem) }}">
    </div>
    <div class="form-group">
        <label for="mota">Địa chỉ</label>
        <input type="text" id="mota" name="mota" value="{{ old('mota', $diadiem->mo_ta) }}">
    </div>
    <div class="form-group">
        <label for="hinhanh">Hình ảnh</label>
        <input type="file" id="hinhanh" name="hinhanh" value="{{ old('hinhanh', $diadiem->duong_dan_anh) }}">
    </div>
    <div class="form-group">
        <label for="diachi">Mô tả</label>
        <input type="text" id="diachi" name="diachi" value="{{ old('diachi', $diadiem->dia_chi) }}">
    </div>
    <div class="form-group">
        <button type="submit" class="btn">Update</button>
    </div>
    </form>
</div>
@endsection
