<?php
  include $_SERVER['DOCUMENT_ROOT']."/repaircenter/include/header.php"
?>
<html>
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" href="/repaircenter/css/board_form.css">
 <script>src="/repaircenter/js/upload_form.js"</script>
</head>
<body>
  <form name="board" method="post" action="insert.php" enctype="multipart/form-data" id="board_f">
    <ul class="board_from">
      <li>
        <span class="col1">첨부파일</span>
        <span class="col2"><div class="mb-3">
          <input class="form-control form-control-sm" id="formFileSm" type="file" sytle="width: 50px;" name="upfile">
        </div></span>
      </li>
      <li>
        <span class="col1">제목</span>
        <div class="col">
          <input type="text" class="form-control" placeholder="title" aria-label="First name" id="sub" name="subject">
        </div>
      </li>
      <li>
        <span class="col1">내용</span>
        <span class="col2"><div class="form-floating">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 500px; width : 90%;" name="content"></textarea>
          <label for="floatingTextarea2">Comments</label>
        </div></span>
      </li>
      <li>
        <span class="col1">작성자: </span>
        <?php 
           include "/repaircenter/member/session.php";
          ?>
      </li>
    </ul>
    <button type="button" class="btn btn-outline-success" id="save" onclick="check_input()">올리기</button>
  </form>
</body>
</html>