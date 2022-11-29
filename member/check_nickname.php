<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <style>
            .close {margin:2% 0 0 12%; cursor:pointer; text-align:center;}
        </style>
        </head>
        <body>
            <h3>닉네임 중복체크</h3>
            <div>
            <?php
              $nickname = $_GET["nickname"];

              if(!$nickname) {
                echo("닉네임을 입력해주세요");
              }
              else {
                $con = mysqli_connect("localhost", "younghae", "1234", "repaircenter");
                $sql = "select * from user where nickname='$nickname'";
                $result = mysqli_query($con, $sql);

                $num_record = mysqli_num_rows($result);

                if($num_record) {
                    echo "중복된 닉네임입니다.<br>";
                    echo "다른 닉네임을 입력해주세요!<br>";
                }
                else {
                    echo "사용 가능한 닉네임입니다.<br>";
                }
                mysqli_close($con);
              }
              ?>
              </div>
              <div class="close">
                <button type="button" class="btn btn-outline-success" onclick="javascript:self.close()">창 닫기</button>
              </div>
        </body>
</html>