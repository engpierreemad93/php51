<?php
// echo $_SERVER['REQUEST_METHOD'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $Input1 = $_POST['num1'];
   $Input2 = $_POST['num2'];
    
    function sum($num1 , $num2){
        $result = $num1 + $num2 ;
        return $result;
      }
      echo sum($Input1 , $Input2 );
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="functions.php">
       <input type="text"  name="num1" placeholder="insert num1">
       <input type="text"  name="num2" placeholder="insert num2">
       <input type="submit" value="sum">
    </form>
</body>
</html>