@extends('layouts.login') 
@section('register')
<form id="signUpForm" action="#">
    <h1>Tạo tài khoản</h1>
    <div class="social-container">
        <a href="#" class="social"> <i class="ti-facebook"></i></a>
        <a href="#" class="social"> <i class="ti-google"></i></a>
        <a href="#" class="social"> <i class="ti-twitter"></i></a>
    </div>
    <span>
        hoặc sử dụng email của bạn để đăng ký
    </span>
    <input type="text" placeholder="Người dùng">
    <input type="email" placeholder="Email">

    <input type="password" id="password" placeholder="Mật khẩu">
    <input type="password" id="confirmPassword" placeholder="Xác nhận mật khẩu?">
    <a href="#">Bạn quên mật khẩu? </a>
    <span id="message" class="error-message"></span>
    <button type="submit">Đăng Ký</button>
</form>
@endsection

@section('login')
<form action="" method="post">
    <h1>Đăng nhập</h1>
    <div class="social-container">
        <a href="#" class="social"> <i class="ti-facebook"></i></a>
        <a href="#" class="social"> <i class="ti-google"></i></a>
        <a href="#" class="social"> <i class="ti-twitter"></i></a>
    </div>
    <span>
        hoặc sử dụng tài khoản
    </span>
    <input type="email" placeholder="Email" name="email" required>
    <input type="password" placeholder="Password" name="password" required>
    <a href="#">Bạn quên mật khẩu? </a>
    <button>Đăng nhập</button>
    @csrf
</form>
@endsection