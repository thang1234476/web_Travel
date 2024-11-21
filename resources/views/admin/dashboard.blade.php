@extends('layouts.admin.index')
@section('content')
<style>
    .trang_chu {
        background-color: #0dc8d5;
        font-weight: bold;
    }
</style>
<div class="container">
    <div class="duyet">
        <h1>Thống Kê</h1>
    </div>
    <div class="stats">
        <div class="stat-card">
            <div class="details">
                <h3>DANH THU THÁNG NÀY</h3>
                <p>850,000 VNĐ</p>
            </div>
            <div class="icon">
                <i class="fas fa-dollar-sign"></i>
            </div>
        </div>
        <div class="stat-card">
            <div class="details">
                <h3>DANH THU NĂM NAY</h3>
                <p>850,000 VNĐ</p>
            </div>
            <div class="icon">
                <i class="fas fa-dollar-sign"></i>
            </div>
        </div>
        <div class="stat-card">
            <div class="details">
                <h3>KHÁCH HÀNG</h3>
                <p>1</p>
            </div>
            <div class="icon">
                <i class="fas fa-calendar-alt"></i>
            </div>
        </div>
        <div class="stat-card">
            <div class="details">
                <h3>NHÂN VIÊN</h3>
                <p>2</p>
            </div>
            <div class="icon">
                <i class="fas fa-calendar-alt"></i>
            </div>
        </div>
        <div class="stat-card">
            <div class="details">
                <h3>TOUR</h3>
                <p>32</p>
            </div>
            <div class="icon">
                <i class="fas fa-calendar-alt"></i>
            </div>
        </div>
        <div class="stat-card">
            <div class="details">
                <h3>ĐỊA ĐIỂM</h3>
                <p>7</p>
            </div>
            <div class="icon">
                <i class="fas fa-calendar-alt"></i>
            </div>
        </div>
        <div class="stat-card">
            <div class="details">
                <h3>BOOKING</h3>
                <p>12</p>
            </div>
            <div class="icon">
                <i class="fas fa-calendar-alt"></i>
            </div>
        </div>
        <div class="stat-card">
            <div class="details">
                <h3>HÓA ĐƠN CHƯA DUYỆT</h3>
                <p>5</p>
            </div>
            <div class="icon">
                <i class="fas fa-comments"></i>
            </div>
        </div>
    </div>
</div>
@endsection