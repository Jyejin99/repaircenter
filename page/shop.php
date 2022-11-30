<?php
  include $_SERVER['DOCUMENT_ROOT']."/repaircenter/include/header.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/repaircenter/css/shop.css">
</head>
<body>
      <main>
    <div class="container">
        <div class="main-box">
            <div class="main-content">
                <h5>업체이름</h5>
                <div class="shop_header">
                    <div class="shop_box">
                        <div class="shop_img">
                            <img src="/repaircenter/img/shop.png" alt="shop">
                        </div>
                        <ul class="shop_des">
                            <li>한줄소개<span></span></li>
                            <li>카테고리<span></span></li>
                            <li>주소<span></span></li>
                        </ul>
                    </div>
                    <div class="btn_chat">
                        <button>채팅하기</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php
  include $_SERVER['DOCUMENT_ROOT']."/repaircenter/include/footer.php"
      ?>
</body>
</html>