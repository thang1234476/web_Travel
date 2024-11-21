@extends('layouts.admin.index')
@section('content')
<style>
    .tai_khoan {
        background-color: #0dc8d5;
        font-weight: bold;
    }
</style>
<div class="container_list_location">
    <div class="duyet">
        <h1>Quản lý Tài khoản</h1>
    </div>
    <button class="btn-add" onclick="window.location='{{ route('list_taikhoan') }}'">Thêm mới</button>
    <div class="table-container">
        <div class="search">
            <label>Search: <input type="search" /></label>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên tài khoản</th>
                    <th>Email</th>
                    <th>SĐT</th>
                    <th>Vai trò</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>
                            @if($item->is_admin === true)
                                admin
                            @elseif ($item->is_admin === false)
                                user
                            @else
                                dữ liệu lỗi
                            @endif
                        </td>
                        <td>
                            <button class="btn-action btn-edit"
                                onclick="window.location='{{ route('edit_taikhoan', ['id' => $item->id]) }}'">Sửa</button>
                            <form action="{{ route('delete_account', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn-action btn-delete" type="submit"
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