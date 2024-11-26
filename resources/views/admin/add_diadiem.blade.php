@extends('layouts.admin.index')
@section('content')
    <style>
        .dia_diem {
            background-color: #0dc8d5;
            font-weight: bold;
        }
    </style>
    <div class="container-diadiem">
        <form action="{{ route('add_diadiem_post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Thêm địa điểm</h1>
            <div class="form-group">
                <label for="TenDD">Tên địa điểm</label>
                <input type="text" id="TenDD" name="TenDD" required>
            </div>
            <div class="form-group">
                <label for="diachi">Địa chỉ</label>
                <input type="text" id="diachi" name="diachi" required>
            </div>
            <div class="form-group">
                <label for="hinhanh">Hình ảnh</label>
                <input type="file" id="hinhanh" name="hinhanh" required>
            </div>
            <div class="form-group">
                <label for="mota">Mô tả</label>
                <input type="text" id="mota" name="mota" required>
            </div>
            <h1>Khối nội dung</h1>
            <div id="content-blocks">
                <div class="content-block">
                    <select name="content_type[]" onchange="toggleContentType(this)"
                        style="margin-bottom: 10px; padding: 5px; border-radius: 5px;">
                        <option value="text">Văn bản</option>
                        <option value="image">Hình ảnh</option>
                    </select>
                    <textarea id="description" name="content_data[]" required cols="75" rows="10" placeholder="Nhập nội dung"
                        style="margin-bottom: 10px; border-radius: 5px;" required></textarea>
                    <input type="file" name="content_file[]"
                        style="display: none; margin-bottom: 10px; padding: 5px; border-radius: 5px;">
                    <input type="text" name="content_name[]"
                        placeholder="Tên khối nội dung (hoặc chú thích)"style="margin-bottom: 10px; padding: 5px; border-radius: 5px;"
                        required>
                </div>
            </div>
            <button type="button" class="btn" onclick="addContentBlock()" style="background-color: #47d6f6">Thêm khối
                nội dung</button>
            <div class="form-group">
                <button type="submit" class="btn">Create</button>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </form>
    </div>
    <script>
        // Hàm ẩn/hiển thị các trường và quản lý thuộc tính required
        function toggleContentType(selectElement) {
            const contentBlock = selectElement.closest('.content-block');
            const contentType = selectElement.value;


            if (contentType === 'text') {
                // Hiển thị textarea, ẩn input file
                const textarea = contentBlock.querySelector('textarea');
                const fileInput = contentBlock.querySelector('input[type="file"]');


                textarea.style.display = 'block';
                textarea.setAttribute('required', 'true');
                fileInput.style.display = 'none';
                fileInput.removeAttribute('required');
            } else if (contentType === 'image') {
                // Hiển thị input file, ẩn textarea
                const textarea = contentBlock.querySelector('textarea');
                const fileInput = contentBlock.querySelector('input[type="file"]');


                textarea.style.display = 'none';
                textarea.removeAttribute('required');
                fileInput.style.display = 'block';
                fileInput.setAttribute('required', 'true');
            }
        }


        // Hàm thêm khối nội dung mới
        function addContentBlock() {
            const container = document.getElementById('content-blocks');
            const block = `
        <div class="content-block">
            <select name="content_type[]" onchange="toggleContentType(this)"
                style="margin-bottom: 10px; padding: 5px; border-radius: 5px;">
                <option value="text">Văn bản</option>
                <option value="image">Hình ảnh</option>
            </select>
            <textarea id="mota" name="content_data[]" required cols="75" rows="10" placeholder="Nhập nội dung"
                style="margin-bottom: 10px; border-radius: 5px;"></textarea>
            <input type="file" name="content_file[]" style="display: none; margin-bottom: 10px; padding: 5px; border-radius: 5px;">
            <input type="text" name="content_name[]"
                placeholder="Tên khối nội dung (hoặc chú thích)"style="margin-bottom: 10px; padding: 5px; border-radius: 5px;" required>
        </div>
    `;
            container.insertAdjacentHTML('beforeend', block);
        }


        // Chạy hàm toggle khi trang được tải lần đầu để thiết lập trạng thái ban đầu
        document.addEventListener("DOMContentLoaded", function() {
            const selects = document.querySelectorAll("select[name='content_type[]']");
            selects.forEach(select => toggleContentType(select));
        });
    </script>
@endsection



