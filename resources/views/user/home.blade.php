@section('tour-card')
@foreach ($tours->random(4) as $item)
    <div class="deal-card1">
        <div class="position-relative">
            <img src="{{ asset('storage/' . $item->hinhanh) }}" alt="{{ $item->TenTour }}">
        </div>
        <div class="deal-content1">
            <h5 class="card-title">{{$item->TenTour}}</h5>
            <p class="deal-info"><i class="bi bi-calendar"></i> {{$item->ngay_bat_dau}} / {{
            \Carbon\Carbon::parse($item->ngay_bat_dau)
                ->diffInDays(\Carbon\Carbon::parse($item->ngay_ket_thuc))
                                    }} ngày</p>
            <p class="deal-info">
            <div class="div_card">
            </div>
            </p>
            <p>
                <span class="deal-price">{{ number_format($item->gia, 0, '', '.')}}đ</span>
            </p>
            <a href="#" class="btn btn-primary btn-sm btn_card1">Xem chi tiết</a>
        </div>
    </div>
@endforeach
@endsection


@include('layouts.user.header')
@include('layouts.user.home')
@include('layouts.user.footer')

