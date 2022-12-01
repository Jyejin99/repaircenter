<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/repaircenter/css/signup.css">
    <script src="/repaircenter/js/check_cos.js"></script>
    <script src="/repaircenter/js/check_nickname.js"></script>
</head>
<body>
    <main class="form-signin w-100 m-auto">
        <div class="signup-form text-center">
            <a href="/repaircenter/index.php"><img class="mb-4" src="/repaircenter/img/logo.png" alt="logo" width="72" height="72"></a>
            <h1 class="h3 mb-3 fw-normal text-white form-title">회원가입</h1>
            <form name="member" action="/repaircenter/member/insert-cos.php" method="post">
              <div class="form-wrap">
                <div class="form-box">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" name="email">
                        <label for="floatingInput">이메일</label>
                    </div>
                    <div class="form-floating mt-3 nickname">
                        <input type="text" class="form-control" id="floatingInput" name="nickname">
                        <label for="floatingInput">닉네임</label>
                        <button class="w-50 btn btn-lg btn-primary" onclick="check_nickname()">중복확인</button>
                    </div>
                    <div class="form-floating mt-3">
                        <input type="password" class="form-control" id="floatingInput" name="pass">
                        <label for="floatingInput">비밀번호</label>
                    </div>
                    <div class="form-floating mt-3">
                        <input type="password" class="form-control" id="floatingInput" name="pass_confirm">
                        <label for="floatingInput">비밀번호 확인</label>
                    </div>
                    <div class="form-floating mt-3">
                        <input type="text" class="form-control" id="floatingInput" name="phone_number">
                        <label for="floatingInput">전화번호</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary sign-btn" onclick="check_input()">sign-up</button>
                    <a href="/repaircenter/member/singup.php" class="text-center back">뒤로가기</a>
                </div>
              </div>
           </form>
        </div>
    </main>
</body>
</html>