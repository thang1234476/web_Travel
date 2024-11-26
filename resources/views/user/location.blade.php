@extends('layouts.user.location')
@section('location-card')
@foreach ($location as $local)
    <div class="location-card">
        <img src="{{ asset('storage/' . $local->hinh_anh) }}" alt="{{ $local->ten_dia_diem }}">
        @auth
            <!-- Người dùng đã đăng nhập -->
            <a href="{{ route('user.local.show', $local->id) }}">
                {{ $local->ten_dia_diem }}
            </a>

        @else
            <!-- Người dùng chưa đăng nhập -->
            <a href="{{ route('user.local.show', $local->id) }}">
                {{ $local->ten_dia_diem }}
            </a>
        @endauth
        @if($local->mo_ta)
            <p class="location-description">{{ Str::limit($local->mo_ta, 150) }}</p>
        @endif
    </div>
@endforeach
@endsection