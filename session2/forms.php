<?php 
session_start();
$username=  $_POST['username']."<br>";
echo $_POST['password']."<br>";
 
$_SESSION['USER_NAME']= $_POST['username'];
$_SESSION['PASSWORD']= $_POST['password'];
?>

<a href="test.php">test page</a>