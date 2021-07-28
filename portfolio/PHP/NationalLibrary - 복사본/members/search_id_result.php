<?php
    // 이전 페이지에서 값 가져오기
    $u_id = $_POST["u_id"];

    // DB 연결
    include "../inc/dbcon.php";

    // 쿼리 작성
    $sql = "select u_id from members where u_id='$u_id';";

    // 쿼리 전송
    $result = mysqli_query($dbcon, $sql);

    // DB에서 결과값 가져오기
    $num = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"<?php echo $u_id;?>" 검색결과</title>
    <style type="text/css">
        body{font-size:20px}
        .sch_id{font-weight:bold}
        .no_use{font-weight:bold;color:blue}
        .use{font-weight:bold;color:red}
    </style>
    <?php if(!$num){ ?>
    <script type="text/javascript">
        function return_val(){
            opener.document.getElementById("u_id").value = "<?php echo $u_id;?>";
            window.close();
        };
    </script>
    <?php }; ?>
</head>
<body>
    <?php if(!$num){ ?>
    <p>
        <span class="sch_id">"<?php echo $u_id;?>"</span>는 사용할 수 <span class="no_use">있는</span> 아이디입니다.
    </p>
    <p>
        <a href="#" onclick="history.back()">[다시 검색]</a>
        <a href="#" onclick="return_val()">[사용하기]</a>
    </p>
    <?php } else{ ?>
    <p>
        <span class="sch_id">"<?php echo $u_id;?>"</span>는 사용할 수 <span class="use">없는</span> 아이디입니다.
    </p>
    <p>
        <a href="#" onclick="history.back()">[다시 검색]</a>
        <a href="#" onclick="window.close()">[닫기]</a>
    </p>
    <?php }; ?>
</body>
</html>