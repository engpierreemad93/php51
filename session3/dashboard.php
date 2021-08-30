<?php session_start(); ?>
<?php require "includes/header.php"?>


    <?php echo "Hello " . $_SESSION['USERNAME']."<br>"; ?>

    <?php if($_SESSION['ROLE'] == 'admin'):?>
        <a href="members.php">member</a>
    <?php endif?>
    <a href="logout.php">logout</a> 


    <?php include"includes/footer.php"?>