<?php 
 namespace app\controller ; 
 
 use  app\controller\Edit ; 
 use app\controller\Destroy ;
 
class UserController  implements  Crud {
   use Edit ;
   use Destroy ;
    public function index(){
        echo "test";
    }

    public function create(){

    }

    public function store(){

    }

}  

?>