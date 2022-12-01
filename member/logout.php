<?php 
  session_start();
  session_destroy();

  echo "<script>
  location.href = '/repaircenter/index.php';
  </script>";
?>