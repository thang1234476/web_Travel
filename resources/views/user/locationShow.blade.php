@extends('layouts.user.locationShow')

@section('main-location')
<div class="container">
    <!-- Thông tin địa điểm -->

    <div class="main-location">
        <img src="{{ asset('storage/' . $diaDiem->hinh_anh) }}" alt="{{ $diaDiem->ten_dia_diem }}">
        <h1>{{ $diaDiem->ten_dia_diem }}</h1>

    </div>
    <p class="mo-ta">{{ $diaDiem->mo_ta }}</p>
    <div class="content-container">
        <div class="description">
            <!-- Nội dung chi tiết bài viết -->
            @foreach($diaDiem->noiDungBaiViet as $noiDung)
                @if($noiDung->loai_noi_dung == 'text')
                    <div class="content-text">
                        <h3>{{ $noiDung->ten_noi_dung }}</h3>
                        <p>{{ $noiDung->du_lieu_noi_dung }}</p>
                    </div>
                @elseif($noiDung->loai_noi_dung == 'image')
                    <div class="content-image">
                        <img src="{{ asset('storage/' . $noiDung->anh_phu) }}" alt="{{ $noiDung->anh_phu }}"
                            style="Width:900px">
                    </div>
                @elseif($noiDung->loai_noi_dung == 'video')
                    <div class="content-video">
                        <video controls>
                            <source src="{{ asset('storage/' . $noiDung->du_lieu_noi_dung) }}" type="video/mp4">
                        </video>
                    </div>
                @endif
            @endforeach

            @if($diaDiem->lien_ket_ban_do)
                <div class="map">
                    <iframe src="{{ $diaDiem->lien_ket_ban_do }}" width="100%" height="450" frameborder="0"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection