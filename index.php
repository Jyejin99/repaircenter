<?php
  include $_SERVER['DOCUMENT_ROOT']."/repaircenter/include/header.php"
?>
<!-- 메인화면 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/></head>
    <link rel="stylesheet" href="/repaircenter/css/index.css">
<body>
  <main>
    <div class="container">
      <div class="main">
        <div class="main-img"></div>
        <div class="main-cover"></div>
        <p class="main-ment">당신의 시간을 절약해드립니다</p>
        <h1 class="main-title">세상의 모든 수리</h1>
        <div class="main-btn"><button class="main-button">문의하기</button></div>
      </div>
      <!-- 카테고리 -->
      <div class="categori">
        <h5>카테고리</h5>
        <div class="categori-list">
          <a href="#"><img src="/repaircenter/img/menu1.png" alt="디지털기기"><p>디지털기기</p></a>
          <a href="#"><img src="/repaircenter/img/menu2.png" alt="가전제품"><p>가전제품</p></a>
          <a href="#"><img src="/repaircenter/img/menu3.png" alt="가구"><p>가구</p></a>
          <a href="#"><img src="/repaircenter/img/menu4.png" alt="차량"><p>차량</p></a>
          <a href="#"><img src="/repaircenter/img/menu5.png" alt="신발"><p>신발</p></a>
        </div>
        <div class="categori-list">
          <a href="#"><img src="/repaircenter/img/menu6.png" alt="의류"><p>의류</p></a>
          <a href="#"><img src="/repaircenter/img/menu7.png" alt="취미"><p>취미</p></a>
          <a href="#"><img src="/repaircenter/img/menu8.png" alt="시계"><p>시계</p></a>
          <a href="#"><img src="/repaircenter/img/menu9.png" alt="악기"><p>악기</p></a>
        </div>
      </div>
      <!-- 업체순위 -->
      <div class="rank">
          <h5>인기업체</h5>
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><div class="company"><a href="#"><img src="/repaircenter/img/shop.png" alt="업체1"><div class="company-des"><h5>업체이름</h5><p>주소</p><p>카테고리</p></div></div></a></div>
              <div class="swiper-slide"><div class="company"><a href="#"><img src="/repaircenter/img/shop.png" alt="업체1"><div class="company-des"><h5>업체이름</h5><p>주소</p><p>카테고리</p></div></div></a></div>
              <div class="swiper-slide"><div class="company"><a href="#"><img src="/repaircenter/img/shop.png" alt="업체1"><div class="company-des"><h5>업체이름</h5><p>주소</p><p>카테고리</p></div></div></a></div>
              <div class="swiper-slide"><div class="company"><a href="#"><img src="/repaircenter/img/shop.png" alt="업체1"><div class="company-des"><h5>업체이름</h5><p>주소</p><p>카테고리</p></div></div></a></div>
              <div class="swiper-slide"><div class="company"><a href="#"><img src="/repaircenter/img/shop.png" alt="업체1"><div class="company-des"><h5>업체이름</h5><p>주소</p><p>카테고리</p></div></div></a></div>
              <div class="swiper-slide"><div class="company"><a href="#"><img src="/repaircenter/img/shop.png" alt="업체1"><div class="company-des"><h5>업체이름</h5><p>주소</p><p>카테고리</p></div></div></a></div>
              <div class="swiper-slide"><div class="company"><a href="#"><img src="/repaircenter/img/shop.png" alt="업체1"><div class="company-des"><h5>업체이름</h5><p>주소</p><p>카테고리</p></div></div></a></div>
              <div class="swiper-slide"><div class="company"><a href="#"><img src="/repaircenter/img/shop.png" alt="업체1"><div class="company-des"><h5>업체이름</h5><p>주소</p><p>카테고리</p></div></div></a></div>
              <div class="swiper-slide"><div class="company"><a href="#"><img src="/repaircenter/img/shop.png" alt="업체1"><div class="company-des"><h5>업체이름</h5><p>주소</p><p>카테고리</p></div></div></a></div>
              <div class="swiper-slide"><div class="company"><a href="#"><img src="/repaircenter/img/shop.png" alt="업체1"><div class="company-des"><h5>업체이름</h5><p>주소</p><p>카테고리</p></div></div></a></div>
              <div class="swiper-slide"><div class="company"><a href="#"><img src="/repaircenter/img/shop.png" alt="업체1"><div class="company-des"><h5>업체이름</h5><p>주소</p><p>카테고리</p></div></div></a></div>
            </div>
            <div class="swiper-button">
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        
          <!-- Swiper JS -->
          <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        
          <!-- Initialize Swiper -->
          <script>
            var swiper = new Swiper(".mySwiper", {
              slidesPerView: 4,
              spaceBetween: 30,
              slidesPerGroup: 4,
              loop: true,
              loopFillGroupWithBlank: true,
              pagination: {
                el: ".swiper-pagination",
                clickable: true,
              },
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
            });
          </script>        
      </div>
    </div>
  </main>
  <!-- footer -->
  <?php
  include $_SERVER['DOCUMENT_ROOT']."/repaircenter/include/footer.php"
?>
  </div>
</body>
</html>
