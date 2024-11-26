@extends('layouts.user.payShow')
@section('oder-summary')
<div class="order-item">
    <img src="{{ asset('storage/' . $tour->hinh_anh) }}" alt="{{ $tour->ten_tour }}">
    <div>
        <p>{{ $tour->ten_tour }}</p>
        <br>
        <p>Ngày đi: {{ \Carbon\Carbon::parse($tour->ngay_bat_dau)->format('d/m/Y') }}</p>
    </div>
</div>

<br>
<p>Số lượng người: {{ $adultCount }} (người)</p>
<div class="order-summary-details">
    <p>Giá tiền: <span>{{ number_format($totalPrice / $adultCount, 0, ',', '.') }}đ</span></p>

    <br>
    <p class="total">Tổng cộng: <span>{{ number_format($totalPrice, 0, ',', '.') }}đ</span></p>
</div>

<br>
<form action="{{ route('payment.process') }}" method="POST">
    @csrf
    <input type="hidden" name="so_nguoi" value="{{ $adultCount }}">
    <input type="hidden" name="tong_tien" value="{{ $totalPrice }}">
    <input type="hidden" name="ma_tour" value="{{ $tour->ma_tour }}">
    <input type="hidden" name="ngay_dat" id="ngay-dat-input">
    <button type="submit" class="place-order-btn">Đặt hàng</button>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ngayDatInput = document.getElementById('ngay-dat-input');

        // Lấy ngày giờ hiện tại
        const currentDate = new Date();
        const formattedDate = currentDate.toISOString().slice(0, 10); // Format YYYY-MM-DD

        // Gán giá trị ngày vào input ẩn
        ngayDatInput.value = formattedDate;
    });
</script>

@endsection