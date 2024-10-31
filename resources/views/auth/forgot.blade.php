@extends('layouts.forgot')
<style>
    form {
        height: 50%;
        background: #ccc;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin-top: 10px;
    }

    h2 {
        text-align: center;
    }

    input {
        width: 80%;
        background: #eee;
        border: none;
        box-shadow: 0px 0px 1px 1px #ccc;
        padding: 12px 15px;
        margin: 8px 0;
    }

    button {
        background-color: #5da5ef;
        background-image: linear-gradient(254deg, #5da5ef 0%, #E0C3FC 100%);
        color: #fff;
        border: 1px solid #ff4b2b;
        border-radius: 20px;
        font-size: 10px;
        font-weight: bold;
        padding: 12px 45px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;
    }

    button:active {
        transform: scale(0.95);
    }

    button:focus {
        outline: none;
    }

    button.sign {
        background: transparent;
        border-color: #fff;
    }
    p {
        text-align: center;
        width: 70%;
        margin: 0 auto;
    }
</style>
@section('content')
<h2>Quên mật khẩu</h2>
<p>Vui lòng nhập email của bạn và chúng tôi sẽ gửi cho bạn một liên kết để lấy lại mật khẩu.</p>
@if (session('status'))
<br>
    <div style="font-size: 10px">{{ session('status') }}</div>
@endif
<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <input type="email" name="email" placeholder="Nhập email của bạn" style="" required>
    <button type="submit">Gửi liên kết đặt lại mật khẩu</button>
</form>



@if ($errors->any())
    <div>{{ $errors->first() }}</div>
@endif
@endsection