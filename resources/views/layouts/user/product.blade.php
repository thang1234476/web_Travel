@extends('layouts.user.main')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

</head>
<style>
    /* Reset và định dạng cơ bản */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        display: flex;
        max-width: 1200px;
        margin: 20px auto;
        margin-top: 100px;
        overflow: hidden;
        align-items: flex-start;
    }

    .tour-image {
        flex: 1;
    }

    .booking-info {
        width: 400px;
        padding: 20px;
        background-color: #eaf6ff;
        line-height: 40px;
        margin-left: 20px;
    }

    .main-image {
        width: 100%;
        max-width: 700px;
        height: 400px;
        object-fit: cover;
        margin-bottom: 10px;
    }

    .thumbnail-images {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .thumbnail-images img {
        width: 100px;
        height: auto;
        cursor: pointer;
        transition: transform 0.2s;
    }


    /* Phần hình ảnh */
    .image-section {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    .image-section img {
        width: 100%;
        max-width: 400px;
        border-radius: 10px;
    }

    .image-thumbnails img:hover {
        border-color: #007bff;
    }

    /* Phần thông tin */
    .info-section {
        flex: 1.5;
        padding: 20px;
    }

    .info-section h1 {
        font-size: 24px;
        color: #333;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .info-section ul {
        list-style: none;
        padding: 0;
        margin: 10px 0;
    }

    .info-section li {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        font-size: 16px;
        color: #555;
        gap: 10px;
    }

    /* Phần đặt tour */
    .booking-section {
        max-width: 1000px;
        margin: 20px auto;
        /* border-radius: 10px; */
        padding: 20px;
    }

    .booking-section table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        table-layout: fixed;
        /* Cố định kích thước cột */
    }

    .booking-section th,
    .booking-section td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .booking-section th {
        width: 25%;
        /* Cố định kích thước cột */
    }

    .total-price {
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 18px;
        font-weight: bold;
        height: 50px;
        padding-right: 50px;
    }

    .total {
        padding-left: 480px;
    }

    .calendar {
        font-size: 27px;
    }

    .total-price .highlight {
        color: red;
    }

    .date-and-btn {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
        flex-wrap: wrap;
        /* Đảm bảo bố cục linh hoạt */
        gap: 10px;
    }

    .date-picker {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 20px;
        border-radius: 5px;
    }

    .book-btn {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        font-size: 16px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .book-btn1 {
        background-color: orange;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        font-size: 16px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .book-btn:disabled {
        background-color: #ccc;
        cursor: not-allowed;
    }



    .book-btn:hover:enabled {
        background-color: #0056b3;
    }


    /* css thêm vào cho phần dưới header*/
    .container1 {
        max-width: 1200px;
        text-align: left;
        margin-left: 200px;
        margin-top: 150px;

    }

    .title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .rating {
        color: #007bff;
        font-size: 30px;
        margin-bottom: 15px;
    }

    .info-row {
        display: flex;
        justify-content: space-around;
        align-items: center;
        gap: 20px;
        flex-wrap: wrap;
        margin-top: 20px;
    }

    .info-box {
        display: flex;
        align-items: center;
        gap: 15px;
        /* Khoảng cách giữa icon và nội dung */
        flex: 1;
        min-width: 150px;
        text-align: left;
    }

    .info-icon {
        font-size: 30px;
        color: #007bff;
    }

    .info-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .info-content .title {
        font-size: 14px;
        color: #555;
        margin: 0;
    }

    .info-content .value {
        font-size: 16px;
        font-weight: bold;
        margin: 0;
        color: #333;
    }

    .tabs {
        display: flex;
        gap: 10px;
        margin: 20px 0;
    }

    .tabs button {
        padding: 10px 20px;
        cursor: pointer;
        border: 1px solid darkorange;
        color: darkorange;
        border-radius: 5px;
        background-color: transparent;
    }

    .tabs button:hover {
        background-color: darkorange;
        color: #fff;
    }

    .tab-content {
        border: 1px solid darkorange;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .tab-content p {
        line-height: 25px;
    }

    .accordion {
        width: 100%;
        background-color: #e6f4ff;
        border-radius: 10px;
        padding: 10px;
        cursor: pointer;
        margin: 5px 0;
    }

    .accordion-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: bold;
    }

    .accordion-content {
        display: none;
        padding: 10px 0;
        font-size: 14px;
        color: #333;
    }

    .arrow {
        font-size: 12px;
        transition: transform 0.3s;
    }

    .open .arrow {
        transform: rotate(180deg);
    }

    .related-tours {
        display: flex;
        gap: 20px;
        margin-top: 20px;
        flex-wrap: wrap;
    }

    .tour-item {
        width: 24%;
        text-align: center;
        margin-bottom: 20px;
    }

    .tour-item img {
        width: 100%;
        border-radius: 10px;
    }

    .tours {
        background-color: white;
        padding: 50px 20px;
        width: 100%;
    }

    .tour-container {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .review-section {
        margin-top: 40px;
    }

    .review-section h2 {
        font-size: 28px;
        color: #333;
        margin-bottom: 15px;
    }

    .review-section button {
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 15px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .review-section button:hover {
        background-color: #0056b3;
    }

    #reviewForm {
        margin-top: 20px;
        background-color: #f8f8f8;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .review-item {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px;
        margin: 10px 0;
        transition: transform 0.2s;
    }

    .review-item:hover {
        transform: scale(1.02);
    }

    .review-item strong {
        color: #007BFF;
    }

    #reviewForm input[type="text"],
    #reviewForm input[type="email"],
    #reviewForm textarea {
        width: 100%;
        padding: 10px;
        margin: 5px 0 15px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    label {
        font-size: 16px;
        color: #333;
        margin-bottom: 5px;
        display: inline-block;
    }

    #rating {
        width: 100%;
        padding: 10px;
        margin: 5px 0 15px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        font-size: 16px;
        color: #333;
        cursor: pointer;
    }

    #rating option {
        padding: 10px;
    }

    #reviewForm button {
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 15px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    #reviewForm button:hover {
        background-color: #0056b3;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .container {
            flex-direction: column;
            /* Xếp chồng phần hình ảnh và thông tin */
        }

        .image-section img {
            max-width: 100%;
        }

        .date-and-btn {
            flex-direction: column;
            /* Nút và lịch xếp chồng */
            align-items: stretch;
        }

        .book-btn,
        .book-btn1 {
            width: 200px;
            display: flexbox;
        }

        .booking-section table {
            display: none;
        }

        .total-price {
            display: inline;
        }

        .date-picker {
            display: none;
        }

    }

    .tour-image {
        text-align: center;
    }

    .main-image {
        width: 100%;
        max-width: 700px;
        height: 400px;
        object-fit: cover;
        margin-bottom: 10px;
    }

    .thumbnail-images {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .thumbnail-images img {
        width: 100px;
        height: auto;
        cursor: pointer;
        transition: transform 0.2s;
    }
</style>

<body>
    <div class="container">
        <!-- Phần hình ảnh (Bên trái) -->
        <div class="tour-image">
            <!-- Ảnh lớn hiển thị chính -->
            <img src="{{ asset('storage/./Image/bienmykhe.jpg') }}" alt="Tour Image" id="mainImage" class="main-image">

            <!-- Dòng ảnh nhỏ bên dưới -->
            <div class="thumbnail-images">
                <img src="{{ asset('storage/./Image/bienmykhe.jpg') }}" alt="Thumbnail 1" onclick="changeImage('{{ asset('storage/./Image/bienmykhe.jpg') }}')">
                <img src="{{ asset('storage/./Image/caurong.jpeg') }}" alt="Thumbnail 2" onclick="changeImage('{{ asset('storage/./Image/caurong.jpeg') }}')">
                <img src="{{ asset('storage/./Image/bana.jpg') }}" alt="Thumbnail 3" onclick="changeImage('{{ asset('storage/./Image/bana.jpg') }}')">
                <img src="{{ asset('storage/./Image/sontra.jpeg') }}" alt="Thumbnail 4" onclick="changeImage('{{ asset('storage/./Image/sontra.jpeg') }}')">
                <img src="{{ asset('storage/./Image/nguhanhson.jpg') }}" alt="Thumbnail 5" onclick="changeImage('{{ asset('storage/./Image/nguhanhson.jpg') }}')">
                <img src="{{ asset('storage/./Image/banner.jpeg') }}" alt="Thumbnail 6" onclick="changeImage('{{ asset('storage/./Image/banner.jpeg') }}')">
            </div>
        </div>

        <!-- Phần booking info (Bên phải) -->
        <div class="booking-info">
            <b>Đà Nẵng - Du lịch Bà Nà Hill - Cầu Vàng - 3 Ngày 2 Đêm</b>
            <hr>
            <p>
                - Chiêm ngưỡng cầu Rồng, cầu quay Sông Hàn, cầu treo Thuận Phước<br>
                - Khám phá Bà Nà Hills sắc màu<br>
                - Bán đảo Sơn Trà, Núi Bà Nà, Chùa Linh Ứng Bãi Bụt, Bãi biển Mỹ Khê
            </p>
        </div>
    </div>


    <!-- Phần đặt tour (Phía dưới) -->
    <div class="booking-section">
        <table>
            <thead>
                <tr>
                    <th>Loại khách</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Tổng giá</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="fa-solid fa-user"></i> Người Lớn</td>
                    <td><input type="number" id="adult" value="0" min="0"></td>
                    <td>45.000.000đ</td>
                    <td id="adult-total">0đ</td>
                </tr>
                <tr>
                    <td><i class="fas fa-child"></i> Trẻ em</td>
                    <td><input type="number" id="children" value="0" min="0"></td>
                    <td>30.000.000</td>
                    <td id="children-total">0đ</td>
                </tr>
                <tr>
                    <td><i class="fas fa-baby"></i> Em bé</td>
                    <td><input type="number" id="infants" value="0" min="0"></td>
                    <td>15.000.000đ</td>
                    <td id="infants-total">0đ</td>
                </tr>
            </tbody>
        </table>
        <div class="total-price">
            <span><i class="fas fa-calculator total"></i> Tổng tiền:</span>
            <span id="total-price" class="highlight">0đ</span>
        </div>
        <div class="date-and-btn date-picker">
            <button class="book-btn" id="book-btn" onclick="redirectToPage()" disabled>
                <i class="fas fa-paper-plane"></i> ĐẶT TOUR
            </button>

        </div>

        
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const childrenInput = document.getElementById('children');
            const infantsInput = document.getElementById('infants');
            const adultInput = document.getElementById('adult');
            const childrenTotal = document.getElementById('children-total');
            const infantsTotal = document.getElementById('infants-total');
            const adultTotal = document.getElementById('adult-total');
            const totalPrice = document.getElementById('total-price');
            const bookBtn = document.getElementById('book-btn');

            const adultPrice = 45000000;
            const childrenPrice = 30000000;
            const infantsPrice = 15000000;

            function calculateTotal() {
                const childrenCount = parseInt(childrenInput.value) || 0;
                const infantsCount = parseInt(infantsInput.value) || 0;
                const adultCount = parseInt(adultInput.value) || 0;

                const totalChildrenPrice = childrenCount * childrenPrice;
                const totalInfantsPrice = infantsCount * infantsPrice;
                const totalAdultPrice = adultCount * adultPrice;

                adultTotal.textContent = totalAdultPrice.toLocaleString() + 'đ';
                childrenTotal.textContent = totalChildrenPrice.toLocaleString() + 'đ';
                infantsTotal.textContent = totalInfantsPrice.toLocaleString() + 'đ';
                const total = totalChildrenPrice + totalInfantsPrice + totalAdultPrice;
                totalPrice.textContent = total.toLocaleString() + 'đ';

                bookBtn.disabled = total === 0; // Chỉ bật nút khi tổng tiền > 0
            }

            adultInput.addEventListener('input', calculateTotal);
            childrenInput.addEventListener('input', calculateTotal);
            infantsInput.addEventListener('input', calculateTotal);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#date-picker", {
                enableTime: false, // Tắt chế độ chọn giờ
                dateFormat: "d-m-Y", // Định dạng ngày (DD-MM-YYYY)
                minDate: "today", // Không cho phép chọn ngày trong quá khứ
            });
        });
    </script>
    <script>
        function changeImage(src) {
            document.getElementById("mainImage").src = src;
        }


        function toggleContent(element) {
            const content = element.querySelector('.accordion-content');
            const arrow = element.querySelector('.arrow');
            content.style.display = content.style.display === 'none' || content.style.display === '' ? 'block' : 'none';
            element.classList.toggle('open');
        }
    </script>
    <script>
        function toggleReviewForm() {
            const form = document.getElementById('reviewForm');
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }

        function submitReview() {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const rating = document.getElementById('rating').value;
            const comment = document.getElementById('comment').value;

            if (name && email && comment) {
                const reviewsList = document.getElementById('reviewsList');

                const reviewItem = document.createElement('div');
                reviewItem.classList.add('review-item');
                reviewItem.innerHTML = `
            <p><strong>${name}</strong> (${email}) - ${'⭐'.repeat(rating)}</p>
            <p>${comment}</p>
            <button onclick="editReview(this)">Sửa</button>
            <hr>
        `;

                reviewsList.appendChild(reviewItem);
                toggleReviewForm(); // Ẩn biểu mẫu sau khi gửi
                clearForm(); // Xóa dữ liệu trong biểu mẫu
            } else {
                alert('Vui lòng điền đầy đủ thông tin!');
            }
        }

        function clearForm() {
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('rating').value = '5';
            document.getElementById('comment').value = '';
        }

        function editReview(button) {
            const reviewItem = button.parentElement;
            const reviewText = reviewItem.querySelector('p:last-of-type');
            const reviewNameEmail = reviewItem.querySelector('p:first-of-type');

            const nameEmail = reviewNameEmail.innerHTML.split(' - ')[0].split(' ')[0];
            const email = reviewNameEmail.innerHTML.split('(')[1].split(')')[0];
            const rating = reviewNameEmail.innerHTML.split('-')[1].length;

            document.getElementById('name').value = nameEmail;
            document.getElementById('email').value = email;
            document.getElementById('rating').value = rating;
            document.getElementById('comment').value = reviewText.innerHTML;

            reviewItem.remove(); // Xóa đánh giá cũ
            toggleReviewForm(); // Hiện biểu mẫu
        }
    </script>
    <script>
        // Update quantity and total price
        function updateQuantity(id, change) {
            const input = document.getElementById(id);
            let newValue = parseInt(input.value) + change;
            if (newValue < 0) newValue = 0;
            input.value = newValue;
            updateTotal();
        }

        // Update the total price based on the quantities
        function updateTotal() {
            const adultPrice = 6500000;
            const adultQty = parseInt(document.getElementById('adult').value);
            const childQty = parseInt(document.getElementById('child').value);
            const infantQty = parseInt(document.getElementById('infant').value);
            const total = (adultQty + childQty + infantQty) * adultPrice;
            document.getElementById('total-price').textContent = total.toLocaleString('vi-VN') + '₫';
        }
    </script>
    <script>
        function changeImage(src) {
            document.getElementById("mainImage").src = src;
        }
    </script>
    <script>
        function redirectToPage() {
            // Thay thế URL bằng route của bạn
            window.location.href = "@auth {{ route('home.cartegory') }} @else {{ route('cartegory') }} @endauth";
        }

        // Nếu muốn bật nút sau khi thực hiện điều kiện
        document.addEventListener('DOMContentLoaded', function() {
            const bookBtn = document.getElementById('book-btn');
            // Ví dụ bật nút sau 3 giây
            setTimeout(() => {
                bookBtn.disabled = false;
            }, 3000);
        });
    </script>
    
</body>

</html>
@endsection