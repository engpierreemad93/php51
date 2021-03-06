<?php
   session_start(); 
   $_SESSION['LANG']=isset($_GET['lang'])?$_GET['lang']:"en";
//    echo $_SESSION['LANG'];
   if($_SESSION['LANG'] == 'en'){
      include "lang/en.php";
   }elseif($_SESSION['LANG'] == 'ar'){
    include "lang/ar.php";
   }else{
    include "lang/en.php";
   }
   require "config.php"; 
   
?>
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['adminusername'];
    $password =  sha1($_POST['adminpassword']);
    $stmt = $con->prepare('SELECT * FROM users WHERE username= ?  AND password =? AND role !=3 ');
    $stmt->execute(array($username , $password));
    $row = $stmt->fetch();
    // echo "<pre>"; 
    // print_r($row);
    // echo "</pre>";
    // exit();
    $count = $stmt->rowCount();
    if($count == 1){
       $_SESSION['USERID'] = $row['user_id'];
       $_SESSION['USERNAME'] = $username ;
       $_SESSION['PASSWORD'] = $row['password'];
       $_SESSION['EMAIL'] = $row['email'];
       $_SESSION['FULLNAME'] = $row['fullname'];
       $_SESSION['ROLE'] = $row['role'];
      header('location:dashboard.php?lang='.$_SESSION["LANG"]);
    }else{
        echo "Sorry Dear";
    }
      
}


?>
<?php include "includes/header.php"?>
<!-- Start login -->
<div class="container">
    <h1 class="text-center"><?= $lang['admin_login']?></h1>
    <section>
       <a href="?lang=en">en</a>
       <a href="?lang=ar">ar</a>
   </section>
    <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
        <div class="mb-3">
            <label class="form-label"><?= $lang['username']?></label>
            <input type="text" class="form-control" name="adminusername">
        </div>
        <div class="mb-3">
            <label class="form-label"><?= $lang['password']?></label>
            <input type="password" class="form-control" name="adminpassword">
        </div>
        <button type="submit" class="btn btn-primary"><?= $lang['submit']?></button>
    </form>
</div>

<!-- End login -- >

  <?php include "includes/footer.php"?>