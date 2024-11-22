<div class="header">
    <div class="user-info">
        <span>{{ Auth::user()->name }}</span>
        <i class="fas fa-user"></i>
        <!-- Thêm dropdown bên trong user-info -->
        <div class="dropdown">
            <a class="dropdown-item" href="">
                <i class="fas fa-home"> </i>
                Trang chủ
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}">
                <i class="fas fa-sign-out-alt"> </i>
                Logout
            </a>
        </div>
    </div>
</div>