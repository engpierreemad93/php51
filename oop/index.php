<?php

use app\controller\UserController;
require "vendor/autoload.php";

$user = new  UserController;

echo $user->destroy();
?>