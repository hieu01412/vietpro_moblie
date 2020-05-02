<?php
session_start();
include_once('../config/connect.php');
define('TEMPLATE', true);
// nếu tồn tại session là login thành công -> vào quản trị admin.php
// nếu ko tồn tại thì login lại
if(isset($_SESSION['mail']) && isset($_SESSION['pass'])){
	include_once('admin.php');
}
else{
	include_once('login.php');	
}
?>