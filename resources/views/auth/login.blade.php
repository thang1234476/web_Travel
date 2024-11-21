@extends('layouts.login') 
@section('register')
<form action="{{ route('register') }}" method="post">
    @csrf
    <h1>Tạo tài khoản</h1>
    <br>
    <input type="text" placeholder="Người dùng" name="name" required>
    <input type="email" placeholder="Email" name="email" required>
    <input type="tel" name="phone" placeholder="Số điện thoại" required pattern="[0-9]{10}" required />
    <input type="password" id="password" name="password" placeholder="Mật khẩu" required>
    <input type="password" id="confirmPassword" name="password_confirmation" placeholder="Xác nhận mật khẩu?" required>
    <span id="message" class="error-message"></span>
    <button type="submit">Đăng Ký</button>
</form>
@endsection

@section('login')
<form action="{{ route('login') }}" method="post">
    <h1>Đăng nhập</h1>
    <br>
    <input type="email" placeholder="Email" name="email" required>
    <input type="password" placeholder="Password" name="password" required>
    <a href="{{route('password.request')}}">Bạn quên mật khẩu? </a>
    <button>Đăng nhập</button>
    @csrf
</form>
@section('error')
@foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach
@endsection
@endsection