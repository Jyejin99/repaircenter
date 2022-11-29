<?php 
  session_start();
  unset($_SESSION["useremail"]);

  echo "<script>
  location.href = '/repaircenter/member/singup.php';
  </script>";
?>