<?php
header('Content-Type: text/html; charset=utf-8');


session_start();

$u_id = $_POST["u_id"];
$u_pwd = $_POST["u_pwd"];

// 
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select * from members where u_id='$u_id';";


$result = mysqli_query($dbcon, $sql);


$num = mysqli_num_rows($result);

if(!$num){
    echo "
        <script type=\"text/javascript\">
            alert(\"일치하는 아이디가 없습니다.\");
            history.back();
        </script>
    ";
    exit;
} else{ 

    $array = mysqli_fetch_array($result);

    
    if($u_pwd != $array["u_pwd"]){
        echo "
            <script type=\"text/javascript\">
                alert(\"비밀번호가 일치하지 않습니다.\");
                history.back();
            </script>
        ";
        exit;
    };

    
    $_SESSION["s_idx"] = $array["idx"];
    $_SESSION["s_name"] = $array["u_name"];
    $_SESSION["s_id"] = $array["u_id"];
   
    mysqli_close($dbcon);

    echo "
        <script type=\"text/javascript\">
            location.href=\"../index.php\";
        </script>
    ";
};


?>