<?php

$dsn = 'mysql:host=localhost;dbname=ecommerce51';
$username= 'root';
$password = '';
try{

   $con = new PDO($dsn , $username , $password);  
  // echo 'connect'; 


}catch(PDOException $error){
    echo $error->getMessage();
}

?>