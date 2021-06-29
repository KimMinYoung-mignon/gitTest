<meta charset="utf-8">
<?php 

$u_name = $_POST["u_name"];
$u_id = $_POST["u_id"];
$u_pwd = $_POST["u_pwd"];
$re_pwd = $_POST["re_pwd"];
$mobile = $_POST["#mobile"];
$email = $_POST["email_id"]-"@"-$_POST["email_dns"];
$birth = $_POST["birth"];
$addr1 = $_POST["addr1"];
$addr2 = $_POST["addr2"];
$addr3 = $_POST["addr3"];
$agree = $_POST["agree"];
$reg_date = date("Y-m-d");


$dbcon = mysqli_connect("localhost", "root", "", "library") or die("DB 접속 실패");
mysqli_set_charset($dbcon, "utf8");


$sql = "insert into members{
    u_name, u_id, u_pwd, mobile, email, birth, postalCode, addr1, addr2, reg_date
    } values{
    '$u_name',  '$u_id', '$u_pwd', '$mobile', '$email', '$birth', '$postalCode', '$addr1', '$addr2', '$reg_date'};";


mysqli_query($dbcon ,$sql)

mysqli_close();

echo "
    <script type=\"text/javascript\">
    location.href=\"result.php\";
    </script>
"



?>