@extends('layouts.user.main')
@section('contain')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: "Arial", sans-serif;
        line-height: 1.6;
        background-color: #f9f9f9;
    }

    #banner-location {
        position: relative;
        height: 600px;
        width: 98.9vw;
        margin-right: 100px;

        overflow: hidden;
    }

    #banner-location img {
        width: 100%;
        height: 800px;
        object-fit: cover;
        filter: brightness(60%);
    }

    .h3 {
        position: absolute;
        color: #f4f4f4;
        top: 50%;
        left: 100px;
        transform: translateY(-50%);
        font-size: 24px;
    }

    /* Section Địa Danh Nổi Tiếng */
    #famous-locations {
        padding: 50px 0;
        text-align: center;
    }

    #famous-locations h2 {
        margin-bottom: 20px;
    }

    .location-container {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .location-card {
        background-color: #f4f4f4;
        padding: 20px;
        border-radius: 10px;
        width: 300px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        overflow: hidden;
    }

    .location-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .location-card h3 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .location-card p {
        font-size: 16px;
        color: #555;
    }

    .location-link {
        font-size: 1.5em;
        color: #333;
        text-decoration: none;
        font-weight: bold;
    }

    .location-link:hover {
        color: #007acc;
    }
</style>

<section id="banner-location">
    <img src="{{ asset('storage/./Image/banner.jpeg') }}" alt="Banner Image">
    <p class="h3">Đà Nẵng trở thành Điểm đến du lịch hàng đầu Châu Á, là một trong những Trung<br>
        tâm du lịch nghỉ dưỡng biển, sinh thái cao cấp, sáng tạo, xanh, thông minh và tổ<br>
        chức hội nghị, sự kiện lễ hội mang tầm quốc tế</p>
</section>


<section id="famous-locations">
    <h2>Những Địa Danh Nổi Tiếng</h2>
    <div class="location-container">
        @yield('location-card')
        
    </div>
</section>
@endsection

</html>