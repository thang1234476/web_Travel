@extends('layouts.user.main')
@section('contain')
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đặt Tour Đà Nẵng</title>
</head>
<style>
    * {
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background-color: #f5f5f5;
        padding: 20px;
    }

    .checkout-container {
        display: flex;
        gap: 20px;
        max-width: 1200px;
        margin: auto;
        margin-top: 100px;
    }

    .customer-info,
    .shipping-payment,
    .order-summary {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .customer-info,
    .shipping-payment {
        flex: 1;
    }

    h2,
    h3 {
        color: darkorange;
        margin-bottom: 20px;
    }

    form input,
    form select,
    form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    textarea {
        resize: vertical;
        min-height: 80px;
    }

    .shipping-info {
        background-color: #e6f4fa;
        padding: 15px;
        color: #333;
        border-radius: 4px;
        margin-bottom: 20px;
    }

    .payment-options label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .order-summary h3 {
        font-size: 1.1em;
    }

    .order-item {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 15px;
    }

    .order-item img {
        width: 60px;
        height: 60px;
        border-radius: 4px;
        object-fit: cover;
    }

    .order-item div {
        flex: 1;
    }

    .order-item .price {
        font-weight: bold;
        color: darkorange;
    }

    .apply-btn {
        width: 100%;
        padding: 10px;
        background-color: darkorange;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 10px;
    }

    .apply-btn:hover {
        background-color: rgb(203, 111, 0);
    }

    .order-summary-details p {
        display: flex;
        justify-content: space-between;
        margin: 10px 0;
    }

    .order-summary-details .total {
        font-weight: bold;
        font-size: 1.2em;
    }

    .back-link {
        display: inline-block;
        color: darkorange;
        margin: 20px 0;
        text-decoration: none;
    }

    .back-link:hover {
        text-decoration: underline;
    }

    .place-order-btn {
        width: 100%;
        padding: 15px;
        background-color: darkorange;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1em;
    }

    .place-order-btn:hover {
        background-color: rgb(203, 111, 0);
    }
</style>

<body>

    <div class="checkout-container">
        <!-- Thông tin nhận hàng -->


        <!-- Vận chuyển và thanh toán -->
        <section class="shipping-payment">
            <h3>Thanh toán</h3>
            <div class="shipping-info">
                Vui lòng nhập yêu cầu thanh toán
            </div>

            <h3>Thanh toán</h3>
            <div class="payment-options">
                <label><input type="radio" name="payment" checked> Chuyển khoản</label>
                <label><input type="radio" name="payment"> Thu hộ (COD)</label>
            </div>
        </section>

        <!-- Đơn hàng -->
        <section class="order-summary">
            @yield('oder-summary')
        </section>
    </div>


</body>

</html>
@endsection