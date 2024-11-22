@extends('layouts.admin.index')
@section('content')
<style>
    .hoa_don {
        background-color: #0dc8d5;
        font-weight: bold;
    }
</style>
<div class="container">
    <h1>Xét duyệt hóa đơn</h1>
    <button class="btn btn-approve">Duyệt hóa đơn</button>
    <button class="btn btn-delete">Xóa</button>
    <div class="dataTables_wrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Khách Hàng</th>
                    <th>Tên tour</th>
                    <th>Ngày đặt</th>
                    <th>Số người</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Duong Duong</td>
                    <td>An Vĩnh</td>
                    <td>2020-07-27 10:49:40</td>
                    <td>9</td>
                    <td>9,440,000VNĐ</td>
                    <td>Chưa xét duyệt</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection