<?php
session_start();
if(isset($_SESSION['mail']) && $_SESSION['pass']){
    session_destroy();
}
header('location: index.php');
?>