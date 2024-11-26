<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Đặt Tour Đà Nẵng</title>

</head>
<style>
  /* Cài đặt cho header */
  header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.3);
    /* Màu đen với 30% độ trong suốt */
    color: black;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    transition: background-color 0.3s ease;
    /* Hiệu ứng chuyển màu mượt */
  }

  header.scrolled {
    background-color: #222222;
    /* Khi cuộn, chuyển sang màu tối */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    /* Thêm bóng nhẹ khi cuộn */
  }

  header img {
    height: 80px;
    width: 150px;
    margin-left: 5%;
  }

  li a img {
    width: 60px;
    height: auto;
  }

  /* Cài đặt cho menu */
  .nav-menu {
    flex-grow: 1;
    display: flex;
  }

  nav ul {
    list-style: none;
    display: flex;
    justify-content: space-around;
    height: 10vh;
    align-items: center;
  }

  nav ul li {
    position: relative;
    /* Cần thiết cho dropdown */
    justify-content: center;
    align-items: center;
    margin-right: 50px;
    text-align: center;
  }

  nav ul li a {
    color: aliceblue;
    text-decoration: none;
    font-size: 16px;
    padding: 10px 15px;
    display: flex;
    align-items: center;
    /* Căn chỉnh icon và văn bản */
    font-weight: bold;
    font-family: Arial, sans-serif;
    transition: color 0.3s ease;
    position: relative;
  }

  /* Cài đặt icon trong các mục menu */
  nav ul li a i {
    margin-right: 8px;
    /* Khoảng cách giữa icon và văn bản */
    font-size: 18px;
    /* Kích thước icon */
  }

  /* Chỉnh màu chữ khi hover */
  nav ul li a:hover {
    color: #007bff;
    /* Màu chữ khi hover */
  }

  /* Hiệu ứng gạch chân khi hover */
  nav ul li a::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background-color: #007bff;
    /* Màu gạch chân */
    transition: width 0.3s ease;
  }

  nav ul li a:hover::after {
    width: 100%;
  }



  /* Media Query cho mobile */
  @media (max-width: 768px) {
    .nav-menu {
      display: none;
      /* Ẩn menu trên mobile */
      position: absolute;
      top: 80px;
      left: 0;
      right: 0;
      background-color: white;
      flex-direction: column;
      z-index: 1000;
    }

    .nav-menu.active {
      display: flex;
      /* Hiển thị menu khi active */
    }

    nav ul {
      flex-direction: column;
      width: 100%;
      margin: 0;
    }

    nav ul li {
      margin-right: 0;
      margin-bottom: 10px;
    }

    .menu-toggle {
      display: flex;
      /* Hiển thị nút toggle khi trên mobile */
    }
  }

  /* Cài đặt cho nút toggle menu trên mobile */
  .menu-toggle {
    display: none;
    /* Ẩn nút toggle menu mặc định */
    flex-direction: column;
    cursor: pointer;
    margin-right: 20px;
  }

  .menu-toggle span {
    height: 3px;
    width: 25px;
    background: black;
    margin: 3px 0;
    transition: all 0.3s ease;
  }
  .menu {
    display: flex;
    list-style: none;
    margin: 0;
    background-color: transparent;
    /* Nền trong suốt */
    margin-right: 100px;
  }

  .menu li i{
    margin: 0 10px;
    padding: 20px;
  }

  .login-dropdown .login-icon {
    font-size: 18px;
    padding: 8px 0;
  }











  /* Đặt kiểu cơ bản cho dropdown */
  .login-dropdown {
    position: relative;
    /* Cần thiết để đặt ul theo li */
    margin-right: 8%;
  }

  /* Ẩn menu mặc định */
  .login-dropdown .dropdown-menu {
    display: none;
    /* Ẩn menu khi không hover */

    top: 100%;
    /* Đặt ngay dưới phần tử cha */
    left: -50px;


    height: 120px;
  }

  /* Hiển thị menu khi hover vào li */
  .login-dropdown:hover .dropdown-menu {
    display: block;
    /* Hiển thị menu */
  }

  /* Hiệu ứng hover cho các mục */
  .dropdown-item a,
  .dropdown-item button {
    display: block;
    padding: 10px 16px;
    color: #333;
    text-decoration: none;
    transition: background-color 0.2s, color 0.2s;
    font-size: 14px;
    border: none;
    width: 130px;
    font-weight: bold;
    background-color: #f9f9f9;
  }

  /* Hover trên mục menu */
  .dropdown-item a:hover,
  .dropdown-item button:hover {
    background-color: #007bff;
    color: #fff;
  }
</style>

<body>
  <header>
    <div class="logo">
      <a href=""><img src="{{ asset('storage/header/logo.png') }}" alt="Logo"></a>
    </div>
    <div class="menu-toggle" onclick="toggleMenu()">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <nav>
      <div class="nav-menu">


        @if (Auth::check())
      <ul class="menu">
        <li><a href="{{Route('home')}}"><i class="fa-solid fa-house"></i>Trang chủ</a></li>
        <li class="dropdown"><a href="{{Route('user.tour')}}"><i class="fa-solid fa-map"></i> Tours</a></li>
        <li><a href="{{Route('user.location')}}"><i class="fa-solid fa-star"></i>Địa điểm</a></li>
        <li><a href="{{Route('user.lienhe')}}"><i class="fa-solid fa-phone"></i>Liên hệ</a></li>
        <li><a href="{{Route('user.introduct')}}"><i class="fa-solid fa-info-circle"></i>Giới thiệu</a></li>
        <li class="dropdown login-dropdown" style="color:#FFFFFF">
        <a class="login-icon">
        <i class="fa-solid fa-user-circle" style="font-size: 40px;"></i>
      </a>
        <ul class="dropdown-menu" style="width: 150px">
          <li class="dropdown-item">
          <a href="{{ route('user.profile', ['id' => Auth::user()->id]) }}">
            Trang cá nhân
          </a>
          </li>
          <li class="divider"></li>
          <li class="dropdown-item">
          <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
            @csrf
            <button type="submit">
            Đăng Xuất
            </button>
          </form>
          </li>
        </ul>
        </li>

      </ul>


    @else
    <ul class="menu">
      <li><a href="{{Route('common')}}"><i class="fa-solid fa-house"></i>Trang chủ</a></li>
      <li class="dropdown"><a href="{{Route('guest.tour')}}"><i class="fa-solid fa-map"></i> Tours</a></li>
      <li><a href="{{Route('guest.location')}}"><i class="fa-solid fa-star"></i>Địa điểm</a></li>
      <li><a href="{{Route('guest.lienhe')}}"><i class="fa-solid fa-phone"></i>Liên hệ</a></li>
      <li><a href="{{Route('guest.introduct')}}"><i class="fa-solid fa-info-circle"></i>Giới thiệu</a></li>
      <li class="dropdown login-dropdown" style="color:#FFFFFF">
      <a class="login-icon" href="{{ route('login') }}">
        <i class="fa-solid fa-user-circle" style="font-size: 40px;"></i>
      </a>
      </li>
    </ul>
  @endif


      </div>
    </nav>
  </header>
</body>
<script>
  function toggleMenu() {
    const nav = document.querySelector(".nav-menu");
    nav.classList.toggle("active");
  }
</script>
<script>
  window.addEventListener("scroll", function () {
    const header = document.querySelector("header");
    if (window.scrollY > 50) {
      header.classList.add("scrolled"); // Thêm lớp 'scrolled' khi cuộn
    } else {
      header.classList.remove("scrolled"); // Xóa lớp 'scrolled' khi trở về trên cùng
    }
  });
</script>

</html>