<?php
include("jdf.php");
error_reporting(0);
$servername = "host";
$username = "username";
$password = "password";
$dbname = "dbname";
$connect = mysqli_connect($servername, $username, $password, $dbname);
function convertPersianToEnglish($string) {
$persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
$english = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
 
$output= str_replace($persian, $english, $string);
return $output;
}
$update = json_decode(file_get_contents('php://input'),true);
$date = convertPersianToEnglish(jdate('Y/m/d'));
$time = convertPersianToEnglish(jdate('H:i'));
foreach($update as $key => $value){    
     $connect->query("INSERT INTO `tablename`(`$key`,`date`,`time`) VALUES ('$value','$date','$time')");
}
echo json_encode(['result'=>true]);
$connect->close();
?>