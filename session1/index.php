<?php $role = "TEST"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php if($role == 'admin'):?>
    <form>
        <input type="text" placeholder="insert username">
        <input type="password" placeholder="insert password">
        <input type="submit">
    </form>
 <?php else:?>
        <h1>you haven't persmission</h1>
<?php endif?>
   
</body>
</html>