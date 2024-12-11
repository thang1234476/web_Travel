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
                        <th>Địa chỉ</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->ten_dia_diem }}</td>
                            <td>{{ $item->mo_ta }}</td>
                            <td>{{ $item->hinh_anh }}</td>
                            <td>{{ $item->lien_ket_ban_do }}</td>
                            <td>
                                <button class="btn-action btn-edit"
                                    onclick="window.location='{{ route('edit_diadiem', ['ma_dia_diem' => $item->id]) }}'">Sửa</button>
                                <form action="{{ route('delete_locations', $item->id) }}" method="POST">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        $(document).ready(function() {
            $('input[type="search"]').on('keyup', function() {
                let query = $(this).val();


                $.ajax({
                    url: '{{ route('search_locations') }}',
                    type: 'GET',
                    data: {
                        query: query
                    },
                    success: function(data) {
                        let rows = '';


                        // Tạo lại hàng của bảng dựa trên dữ liệu nhận được
                        data.forEach(item => {
                            rows += `
                    <tr>
                        <td>${item.id}</td>
                        <td>${item.ten_dia_diem}</td>
                        <td>${item.mo_ta}</td>
                        <td>${item.hinh_anh}</td>
                        <td>${item.lien_ket_ban_do}</td>
                        <td class="action-buttons">
                            <button class="view" onclick="window.location='edit/${item.id}'">Sửa</button>
                            <form action="/delete_locations/${item.id}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class="delete" type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                `;
                        });


                        $('tbody').html(rows);
                    }
                });
            });
        });
    </script>
    @if (session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif
@endsection





