@extends('layouts.user.main')
@section('contain')
<style>
  body, html {
    margin: 0; /* Loại bỏ khoảng trống mặc định của body */
    padding: 0;
  }

  .container {
    display: flex;
    justify-content: space-between;
    background-color: rgb(251, 247, 230);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

 

  .content h1 {
    margin-top: 100px;
  }

  .content p {
    font-size: 20px;
    line-height: 30px;
    
  }

  .container .content {
    padding-left: 5%;
  }

  .image {
    width: 400px;
    height: 500px;
    border-radius: 10px;
    margin-top: 50px;
    margin-right: 5%;
  }
</style>
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
      còn là một người bạn<br>đồng hành trong hành trình chinh phục thành
      công.
    </p>
  </div>
  <div class="image">
    <img src="{{ asset('storage/./Image/bana0.png') }}" alt="Bãi biển Mỹ Khê" class="image">
  </div>
</section>
@endsection