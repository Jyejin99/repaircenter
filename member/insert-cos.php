<?php 
  $email = $_POST["email"];
  $pass = $_POST["pass"];
  $phone_number = $_POST["phone_number"];
  $nickname = $_POST["nickname"];

  $con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");
  $sql = "insert into user(email, pass, phone_number, nickname)";
  $sql .= "values('$email', '$pass', '$phone_number', '$nickname')";

  mysqli_query($con, $sql);
  mysqli_close($con);
  echo "<script>
         location.href='/repaircenter/index.php';
        </script>";
?>