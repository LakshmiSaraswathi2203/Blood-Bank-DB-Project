<?php
session_start();
$username=$_SESSION['username'];
session_destroy(); 
header('Location:userlogin.php');
?>
