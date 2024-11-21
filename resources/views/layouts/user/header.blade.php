<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Đặt Tour Đà Nẵng</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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

  /* Cài đặt cho menu dropdown */
  .dropdown:hover .dropdown-menu {
    display: block;
    /* Hiển thị menu dropdown */
  }

  .dropdown-menu {
    display: none;
    /* Ẩn các dropdown menu ban đầu */
    position: absolute;
    top: 100%;
    /* Đặt vị trí menu ngay dưới item cha */
    left: 0;
    background-color: white;
    padding: 10px 0;
    list-style: none;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    width: 200px;
  }

  .dropdown-menu.active {
    display: block;
    /* Show when active */
  }

  .dropdown-menu li {
    position: relative;
  }

  /* Cài đặt cho submenu */
  .dropdown-menu .dropdown-menu {
    display: none;
    /* Ẩn submenu ban đầu */
    position: absolute;
    top: 0;
    left: 100%;
    /* Đặt sang bên phải item cha */
    margin-left: 10px;
    /* Khoảng cách giữa hai menu */
  }

  .dropdown-menu li:hover .dropdown-menu {
    display: block;
    /* Hiển thị submenu khi hover */
  }

  /* Cài đặt cho item trong submenu */
  .dropdown-menu li a {
    padding: 10px 20px;
    color: black;
    display: block;
    text-align: left;
  }

  .dropdown-menu li a:hover {
    background-color: gainsboro;
  }

  /* Cài đặt cho biểu tượng login */
  .login-dropdown .dropdown-menu {
    top: 100%;
    left: -30px;
    width: 120px;
    text-align: left;
  }

  .login-dropdown .dropdown-menu li a {
    padding: 8px 15px;
    font-size: 14px;
  }

  .login-dropdown:hover .dropdown-menu {
    display: block;
    /* Hiển thị khi hover */
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

  .login-dropdown .login-icon {
    font-size: 18px;
    padding: 8px 0;
  }
</style>

<body>
  <header>
    <div class="logo">
      <a href="index.php"><img src="{{ asset('storage/header/logo.png') }}" alt="Logo"></a>
    </div>
    <div class="menu-toggle" onclick="toggleMenu()">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <nav>
      <div class="nav-menu">
        <ul class="menu">
          <li><a href=""><i class="fa-solid fa-house"></i>Trang chủ</a></li>
          <li class="dropdown"><a href="{{Route('user_tour')}}"><i class="fa-solid fa-map"></i> Tours</a></li>
          <li><a href="#"><i class="fa-solid fa-phone"></i>Liên hệ</a></li>
          <li><a href="#"><i class="fa-solid fa-star"></i>Đánh giá</a></li>
          <li><a href="#"><i class="fa-solid fa-info-circle"></i>Giới thiệu</a></li>
          <li class="dropdown login-dropdown" style="color:#FFFFFF">
            <!-- <a href="#" class="login-icon"><i class="fa-solid fa-user"></i></a> -->
            @yield('login')
          </li>

        </ul>
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
  window.addEventListener("scroll", function() {
    const header = document.querySelector("header");
    if (window.scrollY > 50) {
      header.classList.add("scrolled"); // Thêm lớp 'scrolled' khi cuộn
    } else {
      header.classList.remove("scrolled"); // Xóa lớp 'scrolled' khi trở về trên cùng
    }
  });
</script>

</html>