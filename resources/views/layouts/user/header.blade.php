<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đặt Tour Đà Nẵng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMerC35vMcmro6FT2x0TBI69mfCmMeoKwFwlkh" crossorigin="anonymous">
</head>
<style>
header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: white;
  color: black;
  position: fixed; /* Giữ header cố định */
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
}

header img {
  height: 80px;
  width: 200px;
  margin-left: 20px;
}

.nav-menu {
  flex-grow: 1;
  display: flex;
}

nav ul {
  list-style: none;
  display: flex;
  margin-right: 50px;
}

nav ul li {
  position: relative; /* Cần thiết cho dropdown */
  margin-right: 50px;
}

nav ul li a {
  color: black;
  text-decoration: none;
  font-size: 16px;
  padding: 10px 15px;
  display: block;
  font-weight: bold;
}

nav ul li:hover > a {
  background-color: gainsboro;
  border-radius: 5px;
}

/* Hiển thị menu dropdown khi hover vào */
.dropdown:hover .dropdown-menu {
  display: block; /* Hiện menu dropdown */
}

/* Cài đặt cho dropdown-menu chính */
.dropdown-menu {
  display: none; /* Ẩn các dropdown menu ban đầu */
  position: absolute;
  top: 100%; /* Đặt vị trí menu ngay dưới item cha */
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
    display: block; /* Show when active */
}

/* Các item trong dropdown-menu */
.dropdown-menu li {
  position: relative; /* Đặt vị trí để hỗ trợ sub-menu */
  margin: 0;
}

/* Cài đặt cho sub-dropdown-menu */
.dropdown-menu .dropdown-menu {
  display: none; /* Ẩn các submenu ban đầu */
  position: absolute;
  top: 0; /* Vị trí này để nó nằm bên cạnh item cha */
  left: 100%; /* Đặt sang bên phải item cha */
  margin-left: 10px; /* Khoảng cách giữa hai menu */
}

/* Hiển thị submenu khi hover vào item cha */
.dropdown-menu li:hover .dropdown-menu {
  display: block; /* Hiển thị khi hover */
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
  border-radius: 0;
}

.menu-toggle {
    display: none; /* Initially hide the toggle button */
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

/* Media Query for Mobile */
@media (max-width: 768px) {
    .nav-menu {
        display: none; /* Hide nav menu by default on mobile */
        position: absolute; /* Positioning for dropdown */
        top: 80px; /* Below the header */
        left: 0;
        right: 0;
        background-color: white; /* Match header background */
        flex-direction: column; /* Stack items vertically */
        z-index: 1000;
    }

    .nav-menu.active {
        display: flex; /* Show menu when active */
    }

    nav ul {
        flex-direction: column; /* Stack items vertically */
        width: 100%; /* Full width */
        margin: 0; /* Reset margin */
    }

    nav ul li {
        margin-right: 0; /* Remove right margin */
        margin-bottom: 10px; /* Add spacing between items */
    }

    .menu-toggle {
        display: flex; /* Show toggle button on mobile */
    }
}

.login-dropdown .dropdown-menu {
    top: 100%; /* Đặt vị trí menu ngay dưới icon */
    left: -30px; /* Đặt lệch sang trái để cân đối */
    width: 120px;
    text-align: left;
}

.login-dropdown .dropdown-menu li a {
    padding: 8px 15px;
    font-size: 14px;
}

.login-dropdown:hover .dropdown-menu {
    display: block; /* Hiển thị khi hover */
}

/* Ẩn icon người dùng trên màn hình nhỏ */
@media (max-width: 768px) {
    .login-icon {
        font-size: 18px;
        padding: 8px 0;
    }
}


</style>
<body>
<header>
    <div class="logo">
        <a href="index.php"><img src="./Image/logo.png" alt="Logo"></a>
    </div>
    <div class="menu-toggle" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <nav>
        <div class="nav-menu">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0);" onclick="toggleDropdown(this)">Tours</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Tour du lịch mạo hiểm</a></li>
                        <li><a href="#">Tour du lịch văn hóa</a></li>
                        <li><a href="tours.php">Tour du lịch bãi biển</a></li>
                    </ul>
                </li>
                <li><a href="#locations">Địa điểm</a></li>
                <li><a href="#reviews">Đánh giá</a></li>
                <li><a href="#blog">Tin tức</a></li>
                <li><a href="#contact">Giới thiệu</a></li>
                <li class="dropdown login-dropdown">
                    <!-- <a class="login-icon" href="{{ route('login') }}">
                        <img src="./Image/user.jpg"style="width: 25px; height: 25px; margin: 0px; ">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#login">Đăng nhập</a></li>
                        <li><a href="#register">Đăng ký</a></li>
                    </ul> -->
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

    function toggleDropdown(element) {
        const dropdownMenu = element.nextElementSibling; // Get the dropdown menu
        dropdownMenu.classList.toggle("active"); // Toggle the active class to show/hide
    }
</script>
</html>