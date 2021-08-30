<?php 
// $user = array('1' , 'AMIT' , '123123' , 'admin');
// //  echo "your id is " . $user[0] . "<br>";
// //  echo "your username is " . $user[1] . "<br>";
// // echo count($user)."<br>";
// for($i=0 ; $i < count($user) ; $i++){
//     echo $user[$i]."<br>";
// }


/*
  associative array 
  ------------------
  $user = array( 
                 key => value ,
                 key => value , 
                 key => value 
                )
*/

$user = array(
                 'id' => '1' , 
                 'username' => 'amit' , 
                 'password' => '123123' ,
                 'role' => 'admin'
);
// echo "<pre>";
// print_r($user);
// echo "</pre>";

foreach($user as $data){
 echo $data . "<br>";
}
 
?>