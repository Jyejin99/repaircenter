<?php
  include $_SERVER['DOCUMENT_ROOT']."/repaircenter/include/header.php"
?>
<!-- 견적문의 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/repaircenter/css/estimate.css">
    <link rel="stylesheet" href="/repaircenter/css/board.css">
</head>
<body>

    <main>
        <div class="container">
            <div class="main-box">
                <div class="main-content">
                  <!-- 게시판 -->
                    <h5>견적문의</h5>
                    <ul class="board_list">
                        <li class="col_list">
                            <span class="col1">번호</span>
                            <span class="col2">게시일</span>
                            <span class="col3">사진</span>
                            <span class="img_icon"></span>
                            <span class="col4">제목</span>
                            <span class="col5">작성자</span>
                        </li>
<?php 
   include "session.php";

   if(isset($_GET["page"]))
     $page = $_GET["page"];
   else {
    $page = 1;
   }
   $con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");
   $sql = "select * from estimate_board order by num desc";
   $result = mysqli_query($con, $sql);

   $total_record = mysqli_num_rows($result); //전체 글 수

   $scale = 4; //한 화면에 표시되는 글 수

   //전체 페이지 수 계산
   if($total_record % $scale == 0){
    $total_page = floor($total_record/$scale);
   }
   else {
    $total_page = floor($total_record/$scale) +1;
   }

   $start = (intval($page) - 1) * $scale;
   $number = $total_record - $start;
   for($i=$start; $i<$start+$scale && $i<$total_record; $i++) {
        mysqli_data_seek($result, $i);
        $row = mysqli_fetch_assoc($result);

        $num = $row["number"];
        $email = $row["email"];
        $regist_day = $row["regist_day"];
        if($row["file_name"]){
          $file_image = "<img src='data/'>";
        }
        else{
          $file_image = "";
        }
        $file_type  = $row["file_type"];
        $file_copied  = $row["file_copied"];
        $subject = $row["subject"];
        $username = $row["nikname"];
   ?>
   <li class="col_list">
         <span class="col1"><?=$number?></span>
         <span class="col2"><?=$regist_day?></span>
         <span class="col3">
         <?php
          if($file_image){
            echo "<img src='data/".$file_copied."'width='150'></img>";
          }
          ?><a href="view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></span>
         <span class="img_icon"></span>
         <span class="col4"><?=$subject?></span>
         <span class="col5"><?=$nickname?></span>
    </li>
    <?php
       $number--; 
   }
   mysqli_close($con);
   ?>
                    </ul>				                
                    <ul class="buttons">
    <?php
       if($total_page>=2 && $page >=2) {
        $new_page = $page -1;
        echo "<li><a href='/repaircenter/page/estimate.php?page=$new_page'>◀</a></li>";
       }
       else{
        echo "<li>&nbsp;</li>";
       }
       //게시판 목록 하단에 페이지 링크 번호 출력
       for($i=1; $i<=$total_page; $i++) {
        if($page==$i){
          echo "<li><b>$i</b></li>";
        }
        else{
          echo "<li><a href='/repaircenter/page/estimate.php?page=$i'>$i</a></li>";
        }
       }
       if($total_page>=2 && $page != $total_page) {
        $new_page = $page +1;
        echo "<li><a href='/repaircenter/page/estimate.php?page=$new_page'>▶</a></li>";
       }
       else{
        echo "<li>&nbsp;</li>";
       }
       ?>
                        <li><button onclick="location.href='/repaircenter/page/mboard_estimate/form.php'">업로드</button></li>
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