@extends('layouts.user.tourShow')
@section('booking-info')
<b>{{$tour->ten_tour}} - {{
    \Carbon\Carbon::parse($tour->ngay_bat_dau)
        ->diffInDays(\Carbon\Carbon::parse($tour->ngay_ket_thuc))
                        }} Ngày</b>
<hr>
<p>
    @foreach ($diaDiems as $local)
        {{$local->mo_ta}}
    @endforeach

</p>
@endsection

@section('tour-image')
<!-- Ảnh lớn hiển thị chính -->
<img src="{{ asset('storage/' . $tour->hinh_anh) }}" alt="{{$tour->ten_tour}}" id="mainImage" class="main-image">
<!-- Dòng ảnh nhỏ bên dưới -->
<div class="thumbnail-images">
    <!-- Nội dung hiển thị tour -->
    <img src="{{ asset('storage/') }}" alt="">

</div>

@endsection

@section('booking-section')
<table>
    <thead>
        <tr>
            <th></th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Tổng giá</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><i class="fa-solid fa-user"></i> Người </td>
            <td><input type="number" id="adult" value="0" min="0"></td>
            <td id="adult-price">{{ number_format($tour->gia, 0, ',', '.') }}đ</td>
            <td id="adult-total">0đ</td>
        </tr>
    </tbody>
</table>
<div class="total-price">
    <span><i class="fas fa-calculator total"></i> Tổng tiền:</span>
    <span id="total-price" class="highlight">0đ</span>
</div>
<div class="date-and-btn date-picker">
    <button class="book-btn" id="book-btn" disabled>
        <i class="fas fa-paper-plane"></i> ĐẶT TOUR
    </button>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const adultInput = document.getElementById('adult');
        const adultPrice = parseInt(document.getElementById('adult-price').textContent.replace(/\D/g, ''), 10); // Lấy giá và loại bỏ 'đ'
        const adultTotal = document.getElementById('adult-total');
        const totalPrice = document.getElementById('total-price');
        const bookBtn = document.getElementById('book-btn');

        // Hàm tính tổng giá
        function calculateTotal() {
            const adultCount = parseInt(adultInput.value) || 0;
            const adultTotalPrice = adultCount * adultPrice;

            // Hiển thị giá tổng của từng mục
            adultTotal.textContent = adultTotalPrice.toLocaleString('vi-VN') + 'đ';

            // Tổng tiền
            const total = adultTotalPrice;
            totalPrice.textContent = total.toLocaleString('vi-VN') + 'đ';

            // Bật nút đặt tour nếu tổng giá > 0
            bookBtn.disabled = total <= 0;
        }

        // Lắng nghe thay đổi số lượng
        adultInput.addEventListener('input', calculateTotal);

        // Khi nhấn ĐẶT TOUR, chuyển hướng đến trang thanh toán
        bookBtn.addEventListener('click', function () {
            const adultCount = parseInt(adultInput.value) || 0;
            const total = parseInt(totalPrice.textContent.replace(/\D/g, ''), 10);

            if (total > 0) {
                const url = new URL('{{ route('payment.page') }}');
                url.searchParams.append('tour_id', '{{$tour->ma_tour}}'); // Điều chỉnh 'id' hoặc 'ma_tour'
                url.searchParams.append('adult_count', adultCount);
                url.searchParams.append('total_price', total);

                window.location.href = url.toString();
            }
        });
    });

</script>

@endsection