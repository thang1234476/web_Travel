<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tittle')</title>
    @Vite(['resources/css/style.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('resources/css/style.css')}}" media="all">
</head>

<body>
    <!-- <div class="col-9">
    @if (session('msg'))
            <div class="alert alert-danger">
                {{ session('msg') }}
            </div>
        @endif
    </div>   -->
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            @yield('register')
        </div>

        <div class="form-container sign-in-container">
            @yield('login')
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Chào mừng trở lại</h1>
                    <p>Để duy trì kết nối với chúng tôi vui lòng đăng nhập bằng thông tin cá nhân của bạn</p>
                    <button class="sign" id="signIn">Đăng nhập</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Chào bạn!</h1>
                    <p>Nhập thông tin cá nhân của bạn và bắt đầu hành trình với chúng tôi</p>
                    <button class="sign" id="signUp">Đăng ký</button>
                </div>
            </div>
        </div>

    </div>

    <script>
        const byId = (id) => {
            return document.getElementById(id);
        }
        const $signUpButton = byId('signUp');
        const $signInButton = byId('signIn');
        const $container = byId('container');

        $signUpButton.addEventListener(
            'click',
            () => {
                $container.classList.add(
                    'right-panel-active'
                );
            },
        );
        $signInButton.addEventListener(
            'click',
            () => {
                $container.classList.remove(
                    'right-panel-active'
                );
            },
        );
        document.getElementById('signUpForm').addEventListener('submit', function (event) {
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirmPassword').value;
            var message = document.getElementById('message');

            if (password !== confirmPassword) {
                message.textContent = 'Mật khẩu không khớp!';
                event.preventDefault(); // Ngăn không cho gửi biểu mẫu nếu mật khẩu không khớp
            } else {
                message.textContent = '';
            }
        });
    </script>
    <script>
        @if (session('msg'))
            alert("{{ session('msg') }}");
        @endif
    </script>
    @if ($errors->any())
        <script>
            alert("{{ $errors->first() }}"); // Hiển thị thông báo lỗi đầu tiên
        </script>
    @endif
</body>

</html>