@section('login')
<a class="login-icon" href="{{ route('login') }}">
    <img src="{{ asset('storage/header/user.png') }}" style="wight:auto;">
</a>
@endsection
@include('layouts.user.header')
@include('layouts.user.home')
@include('layouts.user.footer')