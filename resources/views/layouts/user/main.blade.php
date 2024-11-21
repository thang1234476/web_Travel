<!-- resources/views/layouts/user/common.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Thêm các link CSS, scripts nếu cần -->
</head>
<body>
    <!-- Phần header -->
    @include('layouts.user.header')

    <!-- Phần nội dung -->
    <div class="content">
        @yield('contain')
    </div>

    <!-- Phần footer -->
    @include('layouts.user.footer')
</body>
</html>