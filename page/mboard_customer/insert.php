<?php 
   include "session.php";

   if(!$useremail) {
      echo "<script>
               alert('게시판 글쓰기는 로그인 후 이용해주세요!');
               history.go(-1)
               </script>";
      exit;
   }

   $regist_day = date("Y-m-d");

   $subject = $_POST['subject'];
   $content = $_POST['content'];
   
   $subject = htmlspecialchars($subject, ENT_QUOTES);
   $content = htmlspecialchars($content, ENT_QUOTES);

   $upload_dir = 'data/';
   $upfile_name = $_FILES["upfile"]["name"];
   $upfile_tmp_name = $_FILES["upfile"]["tmp_name"];
   $upfile_type = $_FILES["upfile"]["type"];
   $upfile_size = $_FILES["upfile"]["size"];
   $upfile_error = $_FILES["upfile"]["error"];

   if($upfile_name && !$upfile_error) {
      $file = explode(".", $upfile_name);
      $file_name = $file[0];
      $file_ext = $file[1];

      $copied_file_name = date("Y_m_d")."_".mt_rand(0,99999);
      $copied_file_name .= ".".$file_ext;
      $uploaded_file = $upload_dir.$copied_file_name;

      if($upfile_size > 10000000) {
         echo "<script>
                  alert('업로드 파일 크기가 지정된 용량(10MB)을 초과합니다!);
                  history.go(-1)
               </script>";
         exit;
      }
      if(!move_uploaded_file($upfile_tmp_name, $uploaded_file)) {
         echo "<script>
                  alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다);
                  history.go(-1)
               </script>";
         exit;
      }
   }
   else {
      $upfile_name = "";
      $upfile_type = "";
      $copied_file_name = "";
   }

   $con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");

   $sql = "insert into estimate_board(email, regist_day,";
   $sql .= "file_name, file_type, file_copied,"
   $sql .= "subject, content, nickname) values";
   $sql .= "('$useremail','$regist_day',";
   $sql .= "'$upfile_name', '$upfile_type', '$copied_file_name',";
   $sql .= "'$subject', '$content', '$nickname')";

   mysqli_query($con, $sql);
   mysqli_close($con);

   echo "<script>
            location.href = '/repaircenter/page/customer.php';
         </script>";
?>