@extends('layouts.admin.index')
@section('content')
<style>
    .dia_diem {
        background-color: #0dc8d5;
        font-weight: bold;
    }
</style>
<div class="container_list_location">
    <div class="duyet">
        <h1>Quản lý địa điểm</h1>
    </div>
    <button class="btn-add" onclick="window.location='{{ route('add_diadiem') }}'">Thêm mới</button>
    <div class="table-container">
        <div class="search">
            <label>Search: <input type="search" /></label>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Mã Địa điểm</th>
                    <th>Tên Địa điểm</th>
                    <th>Mô tả</th>
                    <th>Ảnh</th>
                    <th>Đia chỉ</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                <td>{{ $item->ma_dia_diem }}</td>
                <td>{{ $item->ten_dia_diem }}</td>
                <td>{{ $item->mo_ta }}</td>
                <td>{{ $item->duong_dan_anh }}</td>
                <td>{{ $item->dia_chi }}</td>
                    <td>
                        <button class="btn-action btn-edit" onclick="window.location='{{ route('edit_diadiem', ['ma_dia_diem' => $item->ma_dia_diem]) }}'">Sửa</button>
                        <form action="{{ route('delete_locations', $item->ma_dia_diem) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn-action btn-delete" type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
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
