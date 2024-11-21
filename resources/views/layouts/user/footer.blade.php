<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
  .footer {
    background-color: #f8f8f8;
    padding: 40px 0;
    color: #333;
  }
  
  .footer-container {
    display: flex;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  
  .footer-section {
    width: 22%;
  }
  
  .footer-section h3 {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 15px;
    color: #000000;
  }
  
  .footer-section p,
  .footer-section ul {
    font-size: 16px;
    line-height: 1.6;
    margin: 0;
  }
  
  .footer-section ul {
    list-style: none;
    padding: 0;
  }
  
  .footer-section ul li {
    margin-bottom: 8px;
  }
  
  .footer-section ul li a {
    color: #333;
    text-decoration: none;
  }
  
  .footer-section ul li a:hover {
    text-decoration: none;
    color: #eb001b;
  }
  
  /* Căn chỉnh các icon của phần Kết nối */
  .social-icons {
    display: flex;
    gap: 25px;
    margin-bottom: 22px;
  }
  
  .social-icons a {
    font-size: 24px;
    color: #333;
    text-decoration: none;
  }
  
  .social-icons a:hover {
    color: #007bff;
  }
  
  /* Căn chỉnh phần Tải ứng dụng */
  .app-links {
    display: flex;
    gap: 5px;
    align-items: center;
    margin-bottom: 20px;
  }
  
  .app-links a {
    font-size: 16px;
    color: #333;
    text-decoration: none;
  }
  
  .app-links a i {
    margin-right: 5px;
  }
  
  .app-links a:hover {
    color: #007bff;
  }
  
  /* Căn chỉnh các icon của phần Phương thức thanh toán */
  .payment-icons {
    display: flex;
    gap: 15px;
    align-items: center;
  }
  
  .payment-icons i {
    font-size: 26px;
  }
  
  .payment-icons .fa-cc-visa {
    color: #1a1f71; /* Màu xanh dương của Visa */
  }
  
  .payment-icons .fa-cc-mastercard {
    color: #eb001b; /* Màu đỏ của Mastercard */
  }
  
  .payment-icons .fa-cc-jcb {
    color: #0066b2; /* Màu xanh dương của JCB */
  }
  
  .payment-icons .fa-cc-apple-pay {
    color: #000000; /* Màu đen của Apple Pay */
  }
  
  .payment-icons .fa-cc-amazon-pay {
    color: #ff9900; /* Màu cam của Amazon Pay */
  }
  
</style>
<body>
<footer class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <h3>THÔNG TIN LIÊN HỆ</h3>
            <p><strong>Địa chỉ</strong><br>470 Trần Đại Nghĩa, Phường Hòa Quý, Quận Ngũ Hành Sơn, Đà Nẵng</p>
            <p><strong>Email</strong><br>support123@gmail.com</p>
            <p><strong>Hotline</strong><br>1900 2005</p>
            <p><strong>Thời gian hỗ trợ</strong><br>08:30 - 21:30 các ngày trong tuần</p>
        </div>
        <div class="footer-section">
            <h3>HƯỚNG DẪN</h3>
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Tour du lịch</a></li>
                <li><a href="#">Tin tức</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>THÔNG TIN CẦN BIẾT</h3>
            <ul>
                <li><a href="#">Về chúng tôi</a></li>
                <li><a href="#">Câu hỏi thường gặp</a></li>
                <li><a href="#">Điều kiện, điều khoản</a></li>
                <li><a href="#">Quy chế hoạt động</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>KẾT NỐI</h3>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-google"></i></a>
            </div>
            <h3>TẢI ỨNG DỤNG TRAVEL</h3>
            <div class="app-links">
            <a href="#"><img src="{{ asset('storage/footer/AppStore.webp') }}" width="150px"></a>
            <a href="#"><img src="{{ asset('storage/footer/CHPlay.webp') }}" width="150px"></a>
            </div>
            <h3>PHƯƠNG THỨC THANH TOÁN</h3>
            <div class="payment-icons">
                <i class="fab fa-cc-visa"></i>
                <i class="fab fa-cc-mastercard"></i>
                <i class="fab fa-cc-jcb"></i>
                <i class="fab fa-cc-apple-pay"></i>
                <i class="fab fa-cc-amazon-pay"></i>
            </div>
        </div>
    </div>
</footer>

</body>
</html>