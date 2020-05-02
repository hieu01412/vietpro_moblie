<!-- Đây là file để kết nối tới DB
Code 1 lần, lần sau dùng thì copy paste
 -->
<?php
// real time : chat
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'vietpro_mobile_shop';

$conn = mysqli_connect($host, $user, $pass, $dbname);

if($conn){
    // thiết lập ngôn ngữ
    mysqli_query($conn, "SET NAMES 'utf8'");
    // echo "Thành công!";
}
else {
    echo "Thất bại!";
}
?>

<!-- http://localhost/user_manager/config/connect.php -->