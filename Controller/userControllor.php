<?php
 include_once("../Model/User.php");

 Class userControllor{
  public $user;

  public function User()
  {
   $this->user=new User();
  }

  public function shows()
  { 
   include '../View/userView.php';
  }
 }
?>