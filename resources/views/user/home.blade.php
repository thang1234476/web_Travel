@section('tour-card')
@if(isset($tours) && $tours->count())
    @foreach ($tours->sortBy('gia')->take(4) as $item)
        <div class="deal-card1">
            <div class="position-relative">
                <img src="{{ asset('storage/' . $item->hinh_anh) }}" alt="{{ $item->ten_tour }}">
            </div>
            <div class="deal-content1">
                <h5 class="card-title">{{$item->ten_tour}}</h5>
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
                @if (Auth::check())
                    <a href="{{ route('user.tour.show', $item->ma_tour) }}" class="btn btn-primary btn-sm btn_card1">Xem chi
                        tiết</a>
                @else
                    <a href="{{ route('guest.tour.show', $item->ma_tour) }}" class="btn btn-primary btn-sm btn_card1">Xem chi
                        tiết</a>
                @endif

            </div>
        </div>
    @endforeach
@else
    <p>Không có tour nào để hiển thị.</p>
@endif
@endsection

@section('card')
@if(isset($location) && $location->count())
    @foreach ($location->take(5) as $item)
        <div class="card">
            <img src="{{ asset('storage/' . $item->hinh_anh) }}" alt="{{$item->ten_dia_diem}}">
            <div class="noi-dung">
                <p class="ten-dia-diem"><i class="bi bi-geo-alt"></i> &nbsp {{$item->ten_dia_diem}}</p>
                <a class="a_diemden" href="#">
                    @auth
                        <!-- Người dùng đã đăng nhập -->
                        <a href="{{ route('user.location') }}">
                            <p class="chi-tiet">Xem chi tiết<i class="bi bi-caret-right-fill"></i></p>
                        </a>

                    @else
                        <!-- Người dùng chưa đăng nhập -->
                        <a href="{{ route('guest.location') }}">
                            <p class="chi-tiet">Xem chi tiết<i class="bi bi-caret-right-fill"></i></p>
                        </a>
                    @endauth

                </a>
            </div>
        </div>
    @endforeach
@else
    <p>Không có địa điểm nào để hiển thị.</p>
@endif
@endsection

@section('search-container')
<!-- Ô đầu tiên: Text input -->
<div class="search-item">
    <i class="fas fa-search search-icon"></i>
    <input type="text" name="wantPlace" class="search-input" placeholder="Bạn muốn đi đâu?">
</div>

<!-- Ô thứ 2: Dropdown chọn điểm đi -->
<div class="search-item">
    <i class="fas fa-map-marker-alt search-icon"></i>
    <input type="text" name="wantPlace" class="search-input" placeholder="Chọn điểm khởi hành">
</div>

<!-- Ô thứ 3: Dropdown chọn điểm đến -->
<div class="search-item">
    <i class="fas fa-user-alt search-icon"></i>
    <input type="number" class="search-input" placeholder="Chọn số người đi" min="1">
</div>

<!-- Ô thứ 4: Date picker -->
<div class="search-item">
    <input type="date" class="search-date" id="departure-date" min="2024-11-16">
</div>

<!-- Nút tìm kiếm -->
<button class="search-button">Tìm kiếm</button>
@endsection

@include('layouts.user.header')
@include('layouts.user.home')
@include('layouts.user.footer')

