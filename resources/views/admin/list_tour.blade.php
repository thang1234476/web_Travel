@extends('layouts.admin.index')
@section('content')
<style>
    .tour {
        background-color: #0dc8d5;
        font-weight: bold;
    }
    
</style>
<div class="container">
    <div class="duyet">
        <h1>Quản lý Tour</h1>
    </div>
    <button class="btn-add" onclick="window.location='{{ route('add_tour') }}'">Thêm mới</button>
    <div class="table-container">
        <div class="search">
            <label>Search: <input type="search" /></label>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên tour</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Ngày bắt đầu</th>
                    <th>Ngày kết thúc</th>
                    <th>Điểm khởi hành</th>
                    <th>Giờ khởi hành</th>
                    <th>Số người</th>
                    <th>Trạng thái</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($data as $item)
            <tr>
                <td>{{ $item->ma_tour }}</td>
                <td>{{ $item->ten_tour }}</td>
                <td><img src="{{ asset('storage/' . $item->hinh_anh) }}" alt="Tour Image" style="width:40px"></td>
                <td>{{ number_format($item->gia, 0, '', '.')}}</td>
                <td>{{ $item->ngay_bat_dau }}</td>
                <td>{{ $item->ngay_ket_thuc }}</td>
                <td>{{ $item->diem_khoi_hanh }}</td>
                <td>{{ $item->gio_khoi_hanh }}</td>
                <td>{{ $item->so_nguoi }}</td>
                <td>{{ $item->trang_thai }}</td>
                <td class="action-buttons">
                    <button class="view" onclick="window.location='{{ route('edit_tour', ['ma_tour' => $item->ma_tour]) }}'">Sửa</button>
                    <form action="{{ route('delete_tour', $item->ma_tour) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="delete" type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination">
        {{ $data->links('vendor.pagination.custom') }}
        </div>
    </div>
</div>
@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif


@endsection
