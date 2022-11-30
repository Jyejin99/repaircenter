<?php
  include $_SERVER['DOCUMENT_ROOT']."/repaircenter/include/header.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/repaircenter/css/categori.css">
</head>
<body>
      <main>
        <div class="container">
            <div class="main-box">
                <div class="main-content">
                    <h5>카테고리 > 디지털기기</h5>
                    <!-- 검색창, 정렬 -->
                    <div class="d-flex top-content">
                        <form class="search" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="search-btn " type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
                            </button>
                        </form>
                        <div class="align-check">
                            <ul class="aling-check-ul">
                                <li><input type="checkbox" id="a2" name="전체동의" />
                                  <label for="a2"><span>가까운순</span></label>
                                </li>
                                <li><input type="checkbox" id="a3" name="전체동의" />
                                  <label for="a3"><span>택배가능순</span></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- 업체리스트 -->
                    <ul class="company">
                        <li class="company-list">
                            <h5>업체이름</h5>
                            <div class="shop">
                                <img src="/repaircenter/img/shop.png" alt="shop">
                            </div>
                            <div class="company-des">
                                <p>카테고리</p>
                                <p>거리</p>
                                <p>택배가능여부</p>
                                <p>지도보기</p>
                            </div>
                            <button>채팅</button>
                        </li>
                        <li class="company-list">
                            <h5>업체이름</h5>
                            <div class="shop">
                                <img src="/repaircenter/img/shop.png" alt="shop">
                            </div>
                            <div class="company-des">
                                <p>카테고리</p>
                                <p>거리</p>
                                <p>택배가능여부</p>
                                <p>지도보기</p>
                            </div>
                            <button>채팅</button>
                        </li>
                        <li class="company-list">
                            <h5>업체이름</h5>
                            <div class="shop">
                                <img src="/repaircenter/img/shop.png" alt="shop">
                            </div>
                            <div class="company-des">
                                <p>카테고리</p>
                                <p>거리</p>
                                <p>택배가능여부</p>
                                <p>지도보기</p>
                            </div>
                            <button>채팅</button>
                        </li>
                        <li class="company-list">
                            <h5>업체이름</h5>
                            <div class="shop">
                                <img src="/repaircenter/img/shop.png" alt="shop">
                            </div>
                            <div class="company-des">
                                <p>카테고리</p>
                                <p>거리</p>
                                <p>택배가능여부</p>
                                <p>지도보기</p>
                            </div>
                            <button>채팅</button>
                        </li>
                        <li class="company-list">
                            <h5>업체이름</h5>
                            <div class="shop">
                                <img src="/repaircenter/img/shop.png" alt="shop">
                            </div>
                            <div class="company-des">
                                <p>카테고리</p>
                                <p>거리</p>
                                <p>택배가능여부</p>
                                <p>지도보기</p>
                            </div>
                            <button>채팅</button>
                        </li>
                        <li class="company-list">
                            <h5>업체이름</h5>
                            <div class="shop">
                                <img src="/repaircenter/img/shop.png" alt="shop">
                            </div>
                            <div class="company-des">
                                <p>카테고리</p>
                                <p>거리</p>
                                <p>택배가능여부</p>
                                <p>지도보기</p>
                            </div>
                            <button>채팅</button>
                        </li>
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