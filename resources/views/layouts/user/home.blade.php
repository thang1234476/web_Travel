<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đặt Tour Đà Nẵng</title>
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="./css/footer.css">
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Arial", sans-serif;
  line-height: 1.6;
  background-color: #f9f9f9;
}

/* Slide */
#hero {
  position: relative;
  height: 80vh;
  overflow: hidden;
}

.hero-slider {
  display: flex;
  width: 300%;
  height: 100%;
  animation: slide 15s infinite;
  position: absolute; /* Đặt vị trí của slider là tuyệt đối */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1; /* Đặt z-index thấp hơn để nội dung ở phía trên */
}

.slide {
  flex: 1;
  background-size: cover;
  background-position: center;
}

/*-------Search--------*/

.hero-content {
  position: relative;
  z-index: 2; /* Cao hơn slider */
  text-align: center;
  color: #fff;
  margin-top: 300px;
}

.hero-content h2 {
  font-size: 48px;
  margin-bottom: 20px;
}

.search-form {
  display: flex;
  justify-content: center;
  gap: 15px;
  background-color: rgba(0, 0, 0, 0.5);
  padding: 20px;
  border-radius: 10px;
  flex-wrap: wrap; /* Cho phép các thành phần xuống dòng trên màn hình nhỏ */
}

.search-form .form-group {
  display: flex;
  flex-direction: column;
  text-align: left;
  color: #fff;
}

.search-form select,
.search-form input {
  padding: 10px;
  border-radius: 5px;
  border: none;
}

.search-form .form-group {
  margin-bottom: 0;
}

.search-form .form-group select,
.search-form .form-group input {
  width: 200px;
}

.search-form .btn {
  background-color: darkorange;
  color: #fff;
  padding: 10px 20px;
  border-radius: 20px;
  text-align: center;
  cursor: pointer;
  align-self: center;
  margin-top: 25px;
  border: 2px solid black;
}

.search-form .btn:hover {
  background-color: rgb(203, 111, 0);
}

/* Section giới thiệu */
.container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 50px;
  background-color: rgb(251, 247, 230);
  margin-top: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.content h1 {
  font-size: 2em;
  color: #333;
}

.content p {
  font-size: 1.2em;
  color: #555;
  margin-bottom: 20px;
  text-align: left;
}

.buttons {
  margin-top: 20px;
}

.buttons button {
  padding: 10px 20px;
  margin-right: 10px;
  font-size: 1em;
  background-color: darkorange;
  color: white;
  border: none;
  border-radius: 20px;
  cursor: pointer;
}

.buttons button:hover {
  background-color: rgb(203, 111, 0);
}

.image {
  width: 400px;
  height: 500px;
  background-image: url("../Image/bienmykhe.jpg");
  background-size: cover;
  background-position: center;
  border-radius: 10px;
  margin-right: 100px;
}

/* Khuyến Mãi Mùa Hè */
.tours {
  background-color: rgb(255, 244, 200);
  padding: 50px 20px;
}

.tours h2 {
  text-align: center;
  font-size: 25px;
  margin-bottom: 20px;
}

.tour-container {
  display: flex;
  justify-content: center;
  gap: 20px;
}

.tour-card {
  background-color: #f4f4f4;
  padding: 20px;
  border-radius: 10px;
  width: 300px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.2s ease-in-out;
}

.tour-card h3 {
  text-align: left;
}

.tour-card p {
  text-align: left;
}

.tour-card img {
  width: 100%;
  border-radius: 10px;
  margin-bottom: 15px;
}

.tour-card:hover {
  transform: scale(1.05);
}

.login {
  margin-left: 20px;
}

.btn-tours {
  color: #fff;
  padding: 15px 25px;
  text-decoration: none;
  border-radius: 5px;
  position: relative;
  top: 200px;
  background: linear-gradient(to left, darkorange 50%, #fff 50%);
  background-size: 200% 100%; /* Kích thước nền lớn hơn để tạo hiệu ứng */
  background-position: right bottom; /* Bắt đầu từ phải */
  transition: all 0.4s ease; /* Thời gian và hiệu ứng chuyển động */
  margin-left: 50px;
}

.btn-tours:hover {
  background-position: left bottom;
  color: darkorange;
}
.btn {
  background-color: darkorange;
  color: #fff;
  padding: 10px 20px;
  text-decoration: none;
  border-radius: 20px;
}

.btn:hover {
  background-color: rgb(203, 111, 0);
}
/* Section Địa Danh Nổi Tiếng */
#famous-locations {
  padding: 50px 0;
  text-align: center;
  background-color: rgb(247, 232, 173);
}

#famous-locations h2 {
  margin-bottom: 20px;
}

.location-container {
  display: flex;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
}

.location-card {
  background-color: #f4f4f4;
  padding: 20px;
  border-radius: 10px;
  width: 300px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
  overflow: hidden;
}

.location-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 10px;
  margin-bottom: 15px;
}

.location-card:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.location-card h3 {
  font-size: 24px;
  margin-bottom: 10px;
}

.location-card p {
  font-size: 16px;
  color: #555;
}

/* Section Khách Hàng Yêu Thích */
#favorite-customers {
  padding: 50px 0;
  text-align: center;
  background: url("../Image/nen.png");
}

#favorite-customers h2 {
  margin-bottom: 20px;
}

.customer-container {
  display: flex;
  justify-content: center;
  gap: 100px; /* Khoảng cách giữa các ô */
  flex-wrap: wrap; /* Để ô tự động xuống hàng nếu không đủ chỗ */
}

.customer-card {
  background-color: #f4f4f4;
  padding: 20px;
  border-radius: 10px;
  width: 300px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column; /* Cột cho từng khách hàng */
  align-items: center;
}

.customer-card p {
  text-align: left;
}

.customer-info {
  display: flex; /* Dạng hàng cho ảnh, tên và số sao */
  align-items: center; /* Căn giữa theo chiều dọc */
}

.customer-image {
  width: 50px;
  height: 50px;
  border-radius: 50%; /* Để ảnh thành hình tròn */
  margin-right: 10px; /* Khoảng cách giữa ảnh và tên */
}

.rating {
  margin-left: 10px; /* Khoảng cách giữa tên và số sao */
}


    </style>
</head>

<body>  
    <section id="hero">
        <div class="hero-slider">
            <div
                class="slide"
                style="background-image: url('./Image/bienmykhe.jpg')"></div>
            <div
                class="slide"
                style="background-image: url('./Image/caurong.jpeg')"></div>
            <div
                class="slide"
                style="background-image: url('./Image/nguhanhson.jpg')"></div>
        </div>

        <!-- Search -->
        <div class="hero-content">
            <h2>Bạn muốn đi đâu?</h2>
            <form class="search-form">
                <div class="form-group">
                    <label for="tours">Chọn Tours</label>
                    <select id="tours">
                        <option value="adventure">Tour du lịch mạo hiểm</option>
                        <option value="cultural">Tour du lịch văn hóa</option>
                        <option value="beach">Tour du lịch bãi biển</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="location">Chọn Địa Điểm</label>
                    <select id="location">
                        <option value="danang">Đà Nẵng</option>
                        <option value="hue">Huế</option>
                        <option value="hoian">Hội An</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Chọn Ngày</label>
                    <input type="date" id="date" />
                </div>
                <button type="submit" class="btn">Tìm Kiếm</button>
            </form>
        </div>
    </section>

    <!-- Section giới thiệu du lịch -->
    <section class="container">
        <div class="content">
            <h1>DU LỊCH THẬT DỄ DÀNG</h1>
            <p>
                Chúng tôi là một công ty tập trung vào việc mang đến những giải pháp <br>
                sáng tạo và hiệu quả cho khách hàng, với sứ mệnh không chỉ đáp
                ứng <br> nhu cầu hiện tại mà còn xây dựng nền tảng vững chắc cho tương
                lai. <br> Với xuất phát điểm là một đội ngũ nhỏ nhưng đầy nhiệt huyết,
                chúng tôi <br> đã phát triển không ngừng qua từng năm, vượt qua nhiều
                thách thức để <br> trở thành một đối tác tin cậy trong ngành.
                Sứ mệnh của chúng tôi là tạo <br> ra những giá trị bền vững, dựa trên sự
                sáng tạo và công nghệ tiên tiến. <br> Chúng tôi tin rằng, sự thành
                công của khách hàng là thành công của chính <br> mình, và chúng tôi
                luôn nỗ lực để hiểu rõ nhu cầu của họ, mang lại những <br> giải pháp tùy
                chỉnh phù hợp.
                Tầm nhìn của chúng tôi là trở thành người <br> dẫn đầu trong lĩnh vực,
                không ngừng đổi mới và phát triển để tạo ra sự <br> khác biệt. Triết
                lý làm việc của chúng tôi dựa trên tinh thần hợp tác, trung <br> thực
                và bền bỉ. Chúng tôi luôn cam kết mang đến những sản phẩm và dịch <br> vụ
                chất lượng, đáp ứng vượt mong đợi của khách hàng.
                Với chúng tôi, mỗi <br> khách hàng không chỉ là một đối tác kinh doanh mà
                còn là một người bạn đồng hành trong hành trình chinh phục thành
                công.
            </p>
            <div class="buttons">
                <button onclick="alert('Xem khuyến mãi mới nhất')">
                    Khuyến mãi mới nhất
                </button>
                <button onclick="alert('Xem dịch vụ của chúng tôi')">
                    Dịch vụ của chúng tôi
                </button>
            </div>
        </div>
        <div class="image"></div>
    </section>

    <!-- Khuyến Mãi Mùa Hè -->
    <section class="tours">
        <h2>Khuyến Mãi Mùa Hè</h2>
        <div class="tour-container">
            <div class="tour-card">
                <img src="./Image/bienmykhe.jpg" alt="Tour 1" />
                <h3>
                    Kỳ nghỉ gia đình<br />
                    Từ 10.000.000đ
                </h3>
                <p>
                    &#8226; Vé máy bay khứ hồi<br />
                    &#8226; 4N/3Đ Phòng 2 người<br />
                    &#8226; Ăn hai bữa<br />
                    &#8226; Tham quan có hướng dẫn viên<br />
                    &#8226; Đồ uống chào mừng<br />
                </p>
                <br />
                <a href="#" class="btn">Đặt Ngay</a>
            </div>
            <br />
            <div class="tour-card">
                <img src="./Image/bienmykhe.jpg" alt="Tour 1" />
                <h3>
                    Nơi nghỉ ngơi lãng mạn<br />
                    Từ 10.000.000đ
                </h3>
                <p>
                    &#8226; Vé máy bay khứ hồi<br />
                    &#8226; 4N/3Đ Phòng 2 người<br />
                    &#8226; Ăn hai bữa<br />
                    &#8226; Tham quan có hướng dẫn viên<br />
                    &#8226; Đồ uống chào mừng<br />
                </p>
                <br />
                <a href="#" class="btn">Đặt Ngay</a>
            </div>
            <br />
            <div class="tour-card">
                <img src="./Image/bienmykhe.jpg" alt="Tour 1" />
                <h3>
                    Trở về với thiên nhiên<br />
                    Từ 10.000.000đ
                </h3>
                <p>
                    &#8226; Vé máy bay khứ hồi<br />
                    &#8226; 4N/3Đ Phòng 2 người<br />
                    &#8226; Ăn hai bữa<br />
                    &#8226; Tham quan có hướng dẫn viên<br />
                    &#8226; Đồ uống chào mừng<br />
                </p>
                <br />
                <a href="#" class="btn">Đặt Ngay</a>
            </div>
            <div class="tours-button">
                <a href="#" class="btn-tours"><b>Đặt Ngay &#10230;</b></a>
            </div>
        </div>
    </section>

    <!-- Famous Locations -->
    <section id="famous-locations">
        <h2>Những Địa Danh Nổi Tiếng</h2>
        <div class="location-container">
            <div class="location-card">
                <img src="./Image/nguhanhson.jpg" alt="Địa danh 1" />
                <h3>Ngũ Hành Sơn</h3>
                <p>
                    Ngũ Hành Sơn là một trong những điểm đến nổi bật ở Đà Nẵng với những
                    ngọn núi hùng vĩ và các ngôi chùa cổ kính.
                </p>
            </div>
            <div class="location-card">
                <img src="./Image/caurong.jpeg" alt="Địa danh 2" />
                <h3>Cầu Rồng</h3>
                <p>
                    Cầu Rồng là biểu tượng của thành phố Đà Nẵng, nổi tiếng với hình
                    dáng rồng độc đáo và hiệu ứng phun lửa vào cuối tuần.
                </p>
            </div>
            <div class="location-card">
                <img src="./Image/bienmykhe.jpg" alt="Địa danh 3" />
                <h3>Bãi Biển Mỹ Khê</h3>
                <p>
                    Bãi biển Mỹ Khê nổi tiếng với cát trắng và nước trong xanh, là địa
                    điểm lý tưởng cho các hoạt động nghỉ dưỡng.
                </p>
            </div>
        </div>
    </section>

    <!-- Khách Hàng Yêu Thích -->
    <section id="favorite-customers">
        <h2>Du Khách Yêu Thích Của Chúng Tôi</h2>
        <div class="customer-container">
            <div class="customer-card">
                <div class="customer-info">
                    <img src="./Image/bao.jpg" alt="Khách 1" class="customer-image" />
                    <span>
                        <h3>Đoàn Nguyên Bảo</h3>
                        <div class="rating">⭐⭐⭐⭐⭐</div>
                    </span>
                </div>
                <p>
                    Thúc đẩy độ đáng tin cậy của sản phẩm và dịch vụ của bạn bằng cách
                    thêm lời chứng thực từ các khách hàng. Mọi người thích được giới
                    thiệu nên phản hồi từ những người đã từng sử dụng sẽ rất quý giá.
                </p>
            </div>
            <div class="customer-card">
                <div class="customer-info">
                    <img src="./Image/huy.jpg" alt="Khách 2" class="customer-image" />
                    <span>
                        <h3>Vương Quốc Huy</h3>
                        <div class="rating">⭐⭐⭐⭐☆</div>
                    </span>
                </div>
                <p>
                    Thúc đẩy độ đáng tin cậy của sản phẩm và dịch vụ của bạn bằng cách
                    thêm lời chứng thực từ các khách hàng. Mọi người thích được giới
                    thiệu nên phản hồi từ những người đã từng sử dụng sẽ rất quý giá.
                </p>
            </div>
            <div class="customer-card">
                <div class="customer-info">
                    <img src="./Image/thang.jpg" alt="Khách 3" class="customer-image" />
                    <span>
                        <h3>Nguyễn Duy Thăng</h3>
                        <div class="rating">⭐⭐⭐⭐⭐</div>
                    </span>
                </div>
                <p>
                    Thúc đẩy độ đáng tin cậy của sản phẩm và dịch vụ của bạn bằng cách
                    thêm lời chứng thực từ các khách hàng. Mọi người thích được giới
                    thiệu nên phản hồi từ những người đã từng sử dụng sẽ rất quý giá.
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->


</body>
</html>