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
<form id="booking-form">
    @csrf
    <input type="hidden" name="so_nguoi" value="{{ $adultCount }}">
    <input type="hidden" name="tong_tien" value="{{ $totalPrice }}">
    <input type="hidden" name="ma_tour" value="{{ $tour->ma_tour }}">
    <input type="hidden" name="ngay_dat" id="ngay-dat-input">
    <button type="submit" class="place-order-btn" id="submit-btn">Đặt hàng</button>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
.place-order-btn:disabled {
    opacity: 0.7;
    cursor: not-allowed;
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ngayDatInput = document.getElementById('ngay-dat-input');
        const submitBtn = document.getElementById('submit-btn');

        // Lấy ngày giờ hiện tại
        const currentDate = new Date();
        const formattedDate = currentDate.toISOString().slice(0, 10);

        // Gán giá trị ngày vào input ẩn
        ngayDatInput.value = formattedDate;

        // Xử lý submit form bằng Ajax
        $('#booking-form').on('submit', function(e) {
            e.preventDefault();
            
            // Disable nút đặt hàng và thêm loading state
            submitBtn.disabled = true;
            submitBtn.innerHTML = 'Đang xử lý...';
            
            $.ajax({
                url: "{{ route('payment.process') }}",
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    // Hiển thị thông báo thành công với timer
                    Swal.fire({
                        title: 'Đặt tour thành công!',
                        text: 'Cảm ơn bạn đã đặt tour. Bạn sẽ được chuyển về trang chủ trong 2 giây.',
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false,
                        timerProgressBar: true
                    }).then(() => {
                        // Chuyển về trang chủ
                        window.location.href = "{{ route('home') }}";
                    });
                },
                error: function(xhr, status, error) {
                    // Hiển thị thông báo lỗi
                    Swal.fire({
                        title: 'Có lỗi xảy ra!',
                        text: 'Không thể đặt tour. Vui lòng thử lại sau.',
                        icon: 'error',
                        confirmButtonText: 'Đóng'
                    });
                    
                    // Enable lại nút đặt hàng
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = 'Đặt hàng';
                }
            });
        });
    });
</script>
@endsection