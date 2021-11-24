<?php
namespace  App\Http\Controllers\Front;
use App\Http\Controllers\Controller;

class UserController extends Controller {
      public  function __construct()
      {
            $this->middleware("auth")->except("update","delete","getIndex","getAdmin");
      }
        public  function render(){
              echo 'hi render';
        }
        public  function update(){
            echo 'hi update';
      }
      public  function delete(){
            echo 'hi delete';
      }
      public function getAdmin(){
            $data["id"]=10;
            $data["name"]="abdelatif";
            return view( 'admin\admin',$data);
        }
}  
 