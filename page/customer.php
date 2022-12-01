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
    <link rel="stylesheet" href="/repaircenter/css/customer.css">
    <link rel="stylesheet" href="/repaircenter/css/board.css">
</head>
<body>
    <main>
        <div class="container">
            <div class="main-box">
                <div class="main-content">
                  <!-- 게시판 -->
                    <h5>고객센터</h5>
                    <ul class="board_list">
                        <li class="col_list">
                            <span class="col1">번호</span>
                            <span class="col2">게시일</span>
                            <span class="col3">사진</span>
                            <span class="img_icon"></span>
                            <span class="col4">제목</span>
                            <span class="col5">작성자</span>
                        </li>
                    </ul>		
                    <!-- 게시판 버튼 -->
                    <ul class="buttons">
                        <li><button onclick="location.href='/repaircenter/page/mboard_customer/form.php'">업로드</button></li>
                    </ul>		
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
    <?php
  include $_SERVER['DOCUMENT_ROOT']."/repaircenter/include/footer.php"
      ?>

</body>
</html>