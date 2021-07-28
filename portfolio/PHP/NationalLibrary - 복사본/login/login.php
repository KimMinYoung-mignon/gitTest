<?php
  header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>국립중앙도서관 로그인</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/6584921572.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

   

    <script type="text/javascript">
        function form_check(){
            var u_id = document.getElementById("u_id");
            var u_pwd = document.getElementById("u_pwd");

            if(!u_id.value){
                alert("아이디를 입력하세요.");
                u_id.focus();
                return false;
            };

            if(!u_pwd.value){
                alert("비밀번호를 입력하세요.");
                u_pwd.focus();
                return false;
            };

            return true;
        };

    </script>


</head>
<body>
    <?php 
    include '../inc/header.php'
    ?>
    
    <div class="mainIMG"></div>
    </section>



    <section class="page-contents">
        <div class="page-link">
            <ul>
                <li class="ico-qrcode"><a href="#"><i class="fa fa-qrcode" aria-hidden="true"></i></a></li>
                <li class="ico-scrap"><a href="#"><span class="lnr lnr-star"></span></a></li>
                <li class="ico-print"><a href="#"><span class="lnr lnr-printer"></span></a></li>
                <li class="ico-send"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
            </ul>
        </div>


        <div class="page-header">
            <div class="nav-location">
                <ul>
                    <li class="home"><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li class="mypage"><a href="#">마이페이지</a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li class="mypage"><a href="#">로그인</a></li>
                </ul>
            </div>
            <h2 class="NLtxt">로그인</h2>
           
        </div>

        <div class="page-login">
            <div class="page-login-wrap">
                <div class="login-text">
                    <img src="img/Untitled-2.jpg" alt="">
                    <div class="login-t">
                        <p>로그인 정보를 입력해주세요.</p>
                        <label for="member" style="cursor: pointer;"><input type="radio" name="member" id="member">통합회원</label>
                        <label for="othermem" style="cursor: pointer";> <input type="radio" name="member" id="othermem">기관회원</label>
                    </div>
                </div>

                <div class="login-Form">
                    <form name="login_form" action="login_ok.php" method="post" onsubmit="return form_check()" class="loginForm">
                        <fieldset>
                            <div class="logBox">
                                <p class="id">
                                    <label for="u_id"  class="label_id">아이디</label>
                                    <input type="text" name="u_id" id="u_id" class="idbox">
                                </p>
                                
                                <p class="id">
                                    <label for="u_pwd" class="label_pwd">비밀번호</label>
                                    <input type="password" name="u_pwd" id="u_pwd" class="idbox">
                                </p>
                            </div>
                            <!-- <p class="pw">비밀번호<input type="password" class="pwbox"></p> -->

                            <!-- <h2><a href="#">로그인</a></h2> -->
                            <p>
                                <button type="submit" class="loginbtn">로그인</button>
                            </p>
                        </fieldset>
                    </form>
                </div>
                <div class="btn-login">
                    <a href="../members/join_portfolio.php">회원가입</a>
                    <a href="#">아이디 찾기</a>
                    <a href="#">비밀번호 찾기</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="bottom">
        <p> • 회원가입, 아이디/비밀번호 분실 등 관련 문의 : 02-590-0708 / 02-590-6258 </p>
        <p> • 인터넷 옵션에 쿠키 허용이 안되어 있을 경우 로그인이 안될 수 있습니다. (로그인 창이 계속 뜰 때)</p>
        <p> &nbsp; &nbsp; &nbsp; *쿠키허용 : 상단메뉴 > 도구 > 인터넷옵션 > 개인정보 > 고급 > 쿠키허용</p>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
      
      
        // GNB 드랍 메뉴 시작
        $('#Menudrop').click(function(){
           $('.innerTopMenu').slideDown(1000);
        });
        $('#Menudrop').mouseleave(function(){
           $('.innerTopMenu').slideUp(1000);
        });
        // GNB 드랍 메뉴 끝 
       


    </script>
</body>
</html>