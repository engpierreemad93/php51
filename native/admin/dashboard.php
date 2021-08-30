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
<?php include "includes/header.php"?>
<?php include "includes/navbar.php"?>
<div class="container">
<div class="row">
     <div class="col-6">
        <?php 
         $stmt= $con->prepare('SELECT count(user_id) FROM users WHERE role=3');
         $stmt->execute();
         $count= $stmt->fetchColumn();
        
        ?>
          <a href="members.php"><?= $count?> members</a>
     </div>
  </div>
</div>

<?php include "includes/footer.php"?>