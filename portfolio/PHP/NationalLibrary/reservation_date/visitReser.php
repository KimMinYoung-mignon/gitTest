<?php
  header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>사전 방문 예약 페이지</title>
    <script src="https://kit.fontawesome.com/6584921572.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/visitReser.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script src="https://kit.fontawesome.com/6584921572.js" crossorigin="anonymous"></script>

</head>
<body>
    <?php
        include '../inc/header.php'
    ?>
   
        <section class="txt">
            <div class="txtTop">
                <ul>
                    <li class="ico-qrcode"><a href="#"><i class="fa fa-qrcode" aria-hidden="true"></i></a></li>
                    <li class="ico-scrap"><a href="#"><span class="lnr lnr-star"></span></a></li>
                    <li class="ico-print"><a href="#"><span class="lnr lnr-printer"></span></a></li>
                    <li class="ico-send"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <div class="txtMid">
                <ul>
                    <li class="home"><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li class="mypage"><a href="#">관람 정보</a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li class="mypage"><a href="#">예약하기</a></li>
                    <li class="mypage"><a href="#">상설전시관 관람 예약</a></li>
                </ul>
                <h2>방문 사전 예약</h2>
            </div>

            <div class="txtBottom">
                <ul>
                    <img src="img/56.JPG" alt="" width="500px">
                    <!-- <li>01. 예약 정보 입력<span class="lnr lnr-chevron-right"></span></li>
                    <li>02. 예약 완료</li> -->
                </ul>

                <div class="timeNotic">
                    <div class="common">
                        <strong>예약안내</strong>
                    </div>
                    <div class="commonTime">
                        <span>※ 온라인접수는 서버시간을 기준으로 합니다.</span>
                        <strong>현재 서버 시간</strong>
                        <div class="serverTime">
                            <span id="serverTime1"></span>
                            <span id="serverTime2"></span>
                        </div>
                    </div>
                </div>
        </section>

        <section class="calendarArea">
            <h5>관람 정보 선택</h5>
            <ul class="calendar-choice-box">
                <li class="calendarArea-calendarBox">
                    <div class="calendarArea-calendarBox-top">
                        <div class="cal_bigBox">
                            <a href="#"><span class="lnr lnr-chevron-left-circle"></span></a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
                            <span>2021</span>년 &nbsp;
                            <span>7월</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
                            <a href="#"><span class="lnr lnr-chevron-right-circle"></span></a>
                            <table class="leftBox">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <span title="일">일</span>
                                        </th>
                                        <th scope="col">
                                            <span title="월">월</span>
                                        </th>
                                        <th scope="col">
                                            <span title="화">화</span>
                                        </th>
                                        <th scope="col">
                                            <span title="수">수</span>
                                        </th>
                                        <th scope="col">
                                            <span title="목">목</span>
                                        </th>
                                        <th scope="col">
                                            <span title="금">금</span>
                                        </th>
                                        <th scope="col">
                                            <span title="토">토</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="claenDate">
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td style="color: rgb(165, 165, 165);"><span>1</span></td>
                                        <td style="color: rgb(165, 165, 165);"><span>2</span></td>
                                        <td style="color: rgb(165, 165, 165);"><span>3</span></td>
                                    </tr>
                                    <tr>
                                        <td style="color: rgb(165, 165, 165);"><span>4</span></td>
                                        <td style="color: rgb(165, 165, 165);"><span>5</span></td>
                                        <td style="color: rgb(165, 165, 165);"><span>6</span></td>
                                        <td style="color: rgb(165, 165, 165);"><span>7</span></td>
                                        <td style="color: rgb(165, 165, 165);"><span>8</span></td>
                                        <td style="color: rgb(165, 165, 165);"><span>9</span></td>
                                        <td style="color: rgb(165, 165, 165);"><span>10</span></td>
                                    </tr>
                                    <tr>
                                        <td style="color: rgb(165, 165, 165);"><span>11</span></td>
                                        <td style="color: rgb(165, 165, 165);"><span>12</span></td>
                                        <td style="color: rgb(165, 165, 165);"><span>13</span></td>
                                        <td ><a href="#" class="today">14</a></td>
                                        <td><a href="#">15</a></td>
                                        <td><a href="#">16</a></td>
                                        <td><a href="#">17</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">18</a></td>
                                        <td><a href="#">19</a></td>
                                        <td><a href="#">20</a></td>
                                        <td><a href="#">21</a></td>
                                        <td><a href="#">22</a></td>
                                        <td><a href="#">23</a></td>
                                        <td><a href="#">24</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">25</a></td>
                                        <td><a href="#">26</a></td>
                                        <td><a href="#">27</a></td>
                                        <td><a href="#">28</a></td>
                                        <td><a href="#">29</a></td>
                                        <td><a href="#">30</a></td>
                                        <td><a href="#">31</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </li>
                <li class="calendarArea-dateChoice">
                    <h4 id="current_dateTxt2" class="calendar-tbl-title">2021-07-14(수)</h4>
                    <table class="tbl-type1 calender">
                        <colgroup>
                            <col width="10%">
                            <col width="30%">
                            <col width="30%">
                            <col width="30%">
                        </colgroup>

                        <thead>
                            <tr class="tbl-type1-tr">
                                <th>회차</th>
                                <th>시간</th>
                                <th>예약 가능 인원</th>
                                <th>선택</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="num">1</td>
                                <td>9:00 - 11:00</td>
                                <td>접수마감</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="num">2</td>
                                <td>11:00 - 12:00</td>
                                <td>접수마감</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="num">3</td>
                                <td>12:00 - 14:00</td>
                                <td>56<span>명</span></td>
                                <td><button>선택</button></td>
                            </tr>
                            <tr>
                                <td class="num">4</td>
                                <td>14:00 - 16:00</td>
                                <td>34<span>명</span></td>
                                <td><button>선택</button></td>
                            </tr>
                            <tr>
                                <td class="num">5</td>
                                <td>16:00 - 18:00</td>
                                <td>40<span>명</span></td>
                                <td><button>선택</button></td>
                            </tr>
                        </tbody>
                    </table>
                </li>
            </ul>
        </section>
<!-- 
        <section class="reserve">
            <div class="reserve-wrap">
                <div class="textReserve">
                    <h5>예약 정보 입력</h5>
                    <p><span class="import">*</span>표시 항목은 필수 입력 사항입니다.</p>
                </div>
                <ul>
                    <div>
                        <ul>
                            <li class="first">
                                <div class="first-box-wrap">
                                    <div class="first-box-step1">
                                        <h4><span class="import">*</span> 관람 인원 입력</h4>
                                        <ul class="input-list">
                                            <li>
                                                <span class="importTxt">•&nbsp;&nbsp;&nbsp;&nbsp;성인</span>
                                                <span>
                                                    <input type="text" style="width: 120px;">명
                                                    <a href="#">취소</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="importTxt">•&nbsp;&nbsp;&nbsp;&nbsp;청소년</span>
                                                <span>
                                                    <input type="text" style="width: 120px;">명
                                                    <a href="#">취소</a>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="importTxt">•&nbsp;&nbsp;&nbsp;&nbsp;어린이(유아)</span>
                                                <span>
                                                    <input type="text" style="width: 120px;">명
                                                    <a href="#">취소</a>
                                                </span>

                                            </li>
                                        <ul>
                                    </div>
                                </div>
                            </li>
                            <li class="second">
                                <div class="second-box-wrap">
                                    <div class="second-box-step1">
                                        <h4>예약자 정보 입력</h4>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>예약자 정보</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        <span>*</span>
                                                        <span>이메일</span>
                                                    </th>
                                                    <td>
                                                        <input type="text">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <span>*</span>
                                                        <span>이름</span>
                                                    </th>
                                                    <td>
                                                        <input type="text">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <span>*</span>
                                                        <span>휴대폰 번호</span>
                                                    </th>
                                                    <td>
                                                        <select name="mobilNum1" id="mobilNum1">
                                                            <option value="010" selected="selected">010</option>
                                                            <option value="011">011</option>
                                                            <option value="016">016</option>
                                                            <option value="019">019</option>
                                                        </select>
                                                        <input type="text" id="mobilNum2">
                                                        <input type="text" id="mobilNum3">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <span>*</span>
                                                        <span>이름2</span>
                                                    </th>
                                                    <td>
                                                        <input type="text">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <span>*</span>
                                                        <span>휴대폰 번호2</span>
                                                    </th>
                                                    <td>
                                                        <select name="mobilNum1" id="mobilNum1">
                                                            <option value="011">011</option>
                                                            <option value="016">016</option>
                                                            <option value="019">019</option>
                                                            <option value="010" selected="selected">010</option>
                                                        </select>
                                                        <input type="text" id="mobilNum2">
                                                        <input type="text" id="mobilNum3">
                                                        
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </ul>
            </div>
        </section> -->
        
    </div>

        <div class="buttonArea">
            <p><a href="#">취소</a></p>
            <p><a href="#">예약하기</a></p>
        </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  
    <script>
        
    </script>
</body>
</html>