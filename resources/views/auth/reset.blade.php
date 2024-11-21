@extends('layouts.reset')
<style>
    form {
        height: 50%;
        background: #ccc;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin-top: 50px;
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
</style>
@section('content')
    <h2>Đặt lại mật khẩu</h2>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <input type="email" name="email" placeholder="Nhập email của bạn" value="{{ $email }}" readonly>
        <input type="password" name="password" placeholder="Mật khẩu mới" required>
        <input type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu mới" required>
        <button type="submit">Đặt lại mật khẩu</button>
    </form>

    @if ($errors->any())
        <div>{{ $errors->first() }}</div>
    @endif
@endsection
