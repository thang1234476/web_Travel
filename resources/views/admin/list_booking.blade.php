@extends('layouts.admin.index')
@section('content')
<style>
    .hoa_don {
        background-color: #0dc8d5;
        font-weight: bold;
    }
</style>
<div class="container">
    <div class="duyet">
        <h1>Xét duyệt hóa đơn</h1>
        <div class="buttons">
            <button
                onclick="window.location='{{ route('thanh_toan', ['trang_thai_thanh_toan' => 'da_thanh_toan']) }}'">Đã
                thanh
                toán
            </button>
            <button
                onclick="window.location='{{ route('thanh_toan', ['trang_thai_thanh_toan' => 'chua_thanh_toan']) }}'">Chưa
                thanh
                toán
            </button>



        </div>
    </div>
    <div class="table-container">
        <div class="search">
            <label>Search: <input type="search" /></label>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên khách hàng</th>
                    <th>Tên Tour</th>
                    <th>Ngày đặt</th>
                    <th>Số người</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datTours as $datTour)
                    <tr>
                        <td>{{ $datTour->ma_dat_tour }}</td>
                        <td>{{ $datTour->user->name }}</td>
                        <td>{{ $datTour->tourDuLich->ten_tour }}</td>
                        <td>{{ $datTour->ngay_dat }}</td>
                        <td>{{ $datTour->so_nguoi }}</td>
                        <td>{{ $datTour->tong_tien }}</td>
                        <td>
                            @if ($datTour->trang_thai_thanh_toan == 'chua_thanh_toan')
                                Chưa xét duyệt
                            @else
                                Đã xét duyệt
                            @endif
                        </td>
                        <td class="action-buttons">
                        <form action="{{ route('duyet', $datTour->ma_dat_tour) }}" method="POST">
                                    @csrf
                                    <button class="view" type="submit">Duyệt</button>
                                </form>
                                <form action="{{ route('delete_bill', $datTour->ma_dat_tour) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="delete" type="submit"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                                </form>




                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif
@endsection