<?php
// DB 연결
$dbcon = mysqli_connect("localhost", "root", "", "library") or die("DB 접속 실패");
mysqli_set_charset($dbcon, "utf8");
?>