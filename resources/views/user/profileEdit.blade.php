@extends('layouts.user.main')

@section('contain')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<div class="container" style="margin-top:10%; margin-bottom:5%">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h2>Chỉnh sửa thông tin người dùng</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('edit.profile.put', $taikhoan->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="Ten" class="form-label">Họ và tên:</label>
                            <input type="text" id="username" name="TenTK" value="{{ old('TenTK', $taikhoan->name) }}"
                                class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="Gender" class="form-label">Giới Tính</label>
                            <select name="Gender" class="form-select" required>
                                <option value="nam" {{ old('gender', $taikhoan->gender) == 'nam' ? 'selected' : '' }}>Nam
                                </option>
                                <option value="nu" {{ old('gender', $taikhoan->gender) == 'nu' ? 'selected' : '' }}>Nữ
                                </option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" id="emai" name="Email" value="{{ old('email', $taikhoan->email) }}"
                                class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="sdt" class="form-label">Số Điện Thoại</label>
                            <input type="text" id="sdt" name="phone" value="{{ old('phone', $taikhoan->phone) }}"
                                class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="diachi" class="form-label">Địa Chỉ</label>
                            <input type="text" id="diachi" name="adress" value="{{ old('adress', $taikhoan->adress) }}"
                                class="form-control">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-lg px-5">Cập nhật</button>
                            <button href="" class="btn btn-primary btn-lg"
                                onclick="window.location='{{ route('edit.profile', ['id' => $taikhoan->id]) }}'">
                                <i class="bi bi-pencil-square"></i> Hủy
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection