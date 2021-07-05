<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>슬라이드</title>
    <link rel="stylesheet" href="../css/slid.css">
</head>
<body>
    <section>
        <ul class="slider">
          <li class="sliderLi">
            <div class="sliderIMG" style="background-image:url('../img/mainCenter.jpg'); height:350px">
              <dl class="slidRight">
                <dt>만천하에 피어나는</dt>
                <dd>따뜻한 예수는 하는 모래뿐일 찬미를 군영과 주는 무엇을 만천하의 칼이다.</dd>
              </dl>
            </div>
          </li>
          <li class="sliderLi">
            <div class="sliderIMG" style="background-image:url('../img/mainCenter2.jpg');height:350px ">
              <dl>
                <dt>생명을 그러므로</dt>
                <dd>만천하의 피어나는 있는 같이, 못할 되려니와, 커다란 쓸쓸하랴?</dd>
              </dl>
            </div>
          </li>
          <li class="sliderLi">
            <div class="sliderIMG" style="background-image:url('../img/mainCenter3.jpg');height:350px">
              <dl class="slidRight">
                <dt>인생을 반짝이는</dt>
                <dd>생명을 그러므로 있을 철환하였는가? 천자만홍이 없으면, 것이다.</dd>
              </dl>
            </div>
          </li>
          <li class="sliderLi">
            <div class="sliderIMG" style="background-image:url('../img/mainCenter4.jpg');height:350px ">
              <dl>
                <dt>산야에 가진 불러보라</dt>
                <dd>인생을 반짝이는 청춘이 힘차게 하였으며, 보이는 이것이야말로 있는가?</dd>
              </dl>
            </div>
          </li>
          <li class="sliderLi">
            <div class="sliderIMG" style="background-image:url('../img/mainCenter5.jpg');height:350px ">
              <dl class="slidRight">
                <dt>풀이 얼음이 무엇을</dt>
                <dd>피고, 산야에 가진 불러 보라. 노년에게서 때에, 인생에 인간에 트고, 듣는다.</dd>
              </dl>
            </div>
          </li>
          <li class="sliderLi">
            <div class="sliderIMG" style="background-image:url('../img/mainCenter6.jpg');height:350px ">
              <dl class="slidRight">
                <dt>풀이 얼음이 무엇을</dt>
                <dd>해내고 말 것이다.</dd>
              </dl>
            </div>
          </li>
        </ul>
        <div class="btn">
          <button type="button" id="prev"><</button>
          <button type="button" id="next">></button>
        </div>
      </section>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script>

            $(function(){
                var $slider = $('.slider'),
                    $firstSlide = $slider.find('.sliderLi').first() // 첫번째 슬라이드
                    .stop(true).animate({'opacity':1},200); // 첫번째 슬라이드만 보이게 하기
            
                function PrevSlide(){ // 이전버튼 함수
                stopSlide();startSlide(); //타이머 초기화
                var $lastSlide = $slider.find('.sliderLi').last() //마지막 슬라이드
                .prependTo($slider); //마지막 슬라이드를 맨 앞으로 보내기  
                $secondSlide = $slider.find('.sliderLi').eq(1)//두 번째 슬라이드 구하기
                .stop(true).animate({'opacity':0},400); //밀려난 두 번째 슬라이드는 fadeOut 시키고
                $firstSlide = $slider.find('sliderLi').first() //맨 처음 슬라이드 다시 구하기
                .stop(true).animate({'opacity':1},400);//새로 들어온 첫 번째 슬라이드는 fadeIn 시키기
                }
                
                function NextSlide(){ // 다음 버튼 함수
                stopSlide();startSlide(); //타이머 초기화
                $firstSlide = $slider.find('.sliderLi').first() // 첫 번째 슬라이드
                .appendTo($slider); // 맨 마지막으로 보내기
                var $lastSlide = $slider.find('.sliderLi').last() // 맨 마지막으로 보낸 슬라이드
                .stop(true).animate({'opacity':0},400); // fadeOut시키기
                $firstSlide = $slider.find('.sliderLi').first()// 맨 처음 슬라이드
                .stop(true).animate({'opacity':1},400);// fadeIn 시키기
                }
                
                $('#next').on('click', function(){ //다음버튼 클릭
                NextSlide();
                });
                $('#prev').on('click', function(){ //이전 버튼 클릭
                PrevSlide();
                });
            
                startSlide(); // 자동 슬라이드 시작
                
                var theInterval;
            
                function startSlide() {
                theInterval = setInterval(NextSlide, 5000); //자동 슬라이드 설정
                }
            
                function stopSlide() { //자동 멈추기
                clearInterval(theInterval);
                }
                
                $('.slider').hover(function(){ //마우스 오버시 슬라이드 멈춤
                stopSlide();
                }, function (){
                startSlide();
                });
            });
      </script>
</body>
</html>