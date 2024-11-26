@extends('layouts.user.main')
@section('contain')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
    }

    .contact-section {
        width: 70%;
        max-width: 80%;
        margin: 10% auto;
    }

    .contact-section h1 {
        text-align: center;
        color: #333;
    }

    .contact-section p {
        text-align: center;
        color: #555;
        margin-top: 0;
    }

    .contact-info {
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
        gap: 10px; /* Tạo khoảng cách giữa các khung */
    }

    .contact-item {
        display: flex;
        align-items: center;
        flex-direction: column;
        text-align: center;
        background-color: #fff;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        width: 30%; /* Mỗi khung chiếm khoảng 1/3 chiều rộng */
    }

    .contact-item img {
        width: 40px;
        height: 40px;
        margin-bottom: 10px;
    }

    .contact-item h3 {
        color: #333;
        margin: 0;
    }

    .contact-item p {
        color: #777;
        margin-top: 5px;
    }

    .map {
        margin-top: 20px;
        text-align: center;
    }

    .map iframe {
        width: 100%;
        height: 400px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
</style>

    <section class="contact-section">
        <h1>Thông tin liên hệ</h1>
        <p>Chúng tôi vinh hạnh vì đã có cơ hội đồng hành với hơn 10.000 khách hàng trên khắp thế giới.</p>

        <div class="contact-info">
            <div class="contact-item">
                <img src="{{ asset('storage/./Image/diachi.png') }}" alt="Icon địa chỉ">
                <div>
                    <h3>Địa chỉ</h3>
                    <p>470 Trần Đại Nghĩa, Phường Hòa Quý, Quận Ngũ Hành Sơn, Đà Nẵng</p>
                </div>
            </div>
            <div class="contact-item">
                <img src="{{ asset('storage/./Image/email.png') }}" alt="Icon email">
                <div>
                    <h3>Email</h3>
                    <p>support123@gmail.com</p>
                </div>
            </div>
            <div class="contact-item">
                <img src="{{ asset('storage/./Image/hotline.png') }}" alt="Icon hotline">
                <div>
                    <h3>Hotline</h3>
                    <p>1900 2005</p>
                </div>
            </div>
        </div>

        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.7326857343046!2d108.2500506238201!3d15.975330165135869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2sVietnam%20-%20Korea%20University%20of%20Information%20and%20Communication%20Technology!5e0!3m2!1sen!2s!4v1730878024253!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    @endsection
</html> 