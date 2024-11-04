@section('login')
<a class="login-icon" href="{{ route('login') }}">
    <img src="./Image/user.jpg" style="width: 25px; height: 25px; margin: 0px; ">
</a>
@endsection
@include('layouts.user.header')
@include('layouts.user.home')
@include('layouts.user.footer')