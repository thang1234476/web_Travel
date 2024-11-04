@section('login')
<a class="login-icon">
    <a>{{ Auth::user()->name }}</a>
    <ul class="dropdown-menu">
        <li><a href="{{ route('logout') }}">Đăng Xuất</a></li>
    </ul>
</a>
@endsection
@include('layouts.user.header')
@include('layouts.user.home')
@include('layouts.user.footer')

