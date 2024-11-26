@extends('layouts.user.main')

@section('contain')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<div class="container" style="margin-top:10%; margin-bottom:5%">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg">
                <div class="card-header bg-info text-white text-center">
                    <h2>Thông tin cá nhân</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>Họ và Tên:</strong> {{ $user->name }}
                        </li>
                        <li class="list-group-item">
                            <strong>Giới Tính:</strong> {{ $user->gender }}
                        </li>
                        <li class="list-group-item">
                            <strong>Email:</strong> {{ $user->email }}
                        </li>
                        <li class="list-group-item">
                            <strong>Số điện thoại:</strong> {{ $user->phone }}
                        </li>
                        <li class="list-group-item">
                            <strong>Địa chỉ:</strong> {{ $user->adress }}
                        </li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                    <button href="" class="btn btn-primary btn-lg"
                        onclick="window.location='{{ route('edit.profile', ['id' => $user->id]) }}'">
                        <i class="bi bi-pencil-square"></i> Chỉnh sửa
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection