<?php 
  $email = $_POST["email"];
  $pass = $_POST["pass"];
  $phone_number = $_POST["phone_number"];
  $nickname = $_POST["nickname"];

  $con = mysqli_connect("localhost", "younghae", "1234", "repaircenter");
  $sql = "insert into user(email, pass, phone_number, nickname)";
  $sql .= "values('$email', '$pass', '$phone_number', '$nickname')";

  mysqli_query($con, $sql);
  mysqli_close($con);
  // echo "<script>
  //        location.href='/repaircenter/member/index.php';
  //       </script>";
?>