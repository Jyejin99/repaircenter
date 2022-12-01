<?php
  include $_SERVER['DOCUMENT_ROOT']."/repaircenter/include/header.php"
?>
<html>
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" href="/repaircenter/css/boardform.css">
</head>
<body>
<main>
        <div class="container">
            <div class="main-box">
                <div class="main-content">
                    <h5>게시판</h5>
                    <form class="board" name="board" method="post" action="/repaircenter/page/mboard_customer/insert.php" enctype="multipart/form-data">
                        <ul class="board-form">
                            <li>
                                <span class="col1">작성자</span>
                                <span class="col2">유저이름</span>
                            </li>					
                            <li>
                                <span class="col1">제목</span>
                                <span class="col2"><input name="subject" type="text"></span>
                            </li>	    	
                            <li class="area">	
                                <span class="col1">내용</span>
                                <span class="col2">
                                    <textarea name="content"></textarea>
                                </span>
                            </li>
                            <li>
                                <span class="col1">첨부파일</span>
                                <span class="col2"><input type="file" name="upfile"></span>
                            </li>			
                        </ul>
                        <ul class="buttons">
                            <script src="/repaircenter/js/upload_form.js"></script>
                            <li><button class="btn1" type="button" onclick="check_input()">업로드</button></li>
                            <li><button class="btn2" type="button" onclick="">목록</button></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>