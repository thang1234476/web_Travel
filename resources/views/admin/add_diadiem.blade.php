@extends('layouts.admin.index')
@section('content')
<style>
    .dia_diem {
        background-color: #0dc8d5;
        font-weight: bold;
    }
</style>
<div class="container-diadiem">
    <form action="{{ route('add_diadiem_post') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="TenDD">Tên địa điểm</label>
            <input type="text" id="TenDD" name="TenDD">
        </div>
        <div class="form-group">
            <label for="diachi">Địa chỉ</label>
            <input type="text" id="diachi" name="diachi">
        </div>
        <div class="form-group">
            <label for="hinhanh">Hình ảnh</label>
            <input type="file" id="hinhanh" name="hinhanh">
        </div>
        <div class="form-group">
            <label for="mota">Mô tả</label>
            <input type="text" id="mota" name="mota">
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