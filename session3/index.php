<?php 
session_start();
if(isset($_POST['username'])){
    $_SESSION['USERNAME'] = $_POST['username'] ; 
    $_SESSION['PASSWORD'] =  $_POST['password'];
    $_SESSION['ROLE'] = 'moderator';
    header('location:dashboard.php');
}
?>
<?php include"includes/header.php"?>
    <h1>login</h1>
    <form method="post" action="index.php">
    <input type="text" placeholder="insert username" name="username">
    <br>
    <input type="password" placeholder="insert password" name="password">
    <br>
    <input type="submit">
    </form>
    <?php include"includes/footer.php"?>


