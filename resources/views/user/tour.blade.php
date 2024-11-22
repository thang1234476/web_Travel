@extends('layouts.user.tour')

@section('part-in-tour')
@foreach ($tours as $item )
<div class="tour-item" data-price={{number_format($item->gia, 0, '', '.')}}>
    <img src="{{ asset('storage/' . $item->hinhanh) }}" alt="{{ $item->TenTour }}">
    <div class="tour-details">
        <div class="top-row">
            <span class="icon-location">📍 Khởi hành từ: {{$item->diem_khoi_hanh}}</span>
        </div>
        <div class="mid-row">
            <h3>{{$item->TenTour}}</h3>
            <p class="tour-price">{{number_format($item->gia, 0, '', '.')}}đ</p>
        </div>
        <div class="bottom-row">
            <a href="#"><button>Xem chi tiết</button></a>
        </div>
        <div>
            <span class="icon-clock">⏰ Thời gian: {{
    \Carbon\Carbon::parse($item->ngay_bat_dau)
        ->diffInDays(\Carbon\Carbon::parse($item->ngay_ket_thuc))
                        }} ngày</span>
        </div>
    </div>
</div>
@endforeach
@endsection