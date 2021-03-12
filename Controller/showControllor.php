<?php
 
 include_once("Model/Show.php");

 Class showControllor{
  public $show;

  public function Controllor()
  {
   $this->show=new Show();
  }

  public function shows()
  { $this->show=new Show();
   $result = $this->show->insert_data();
   //include '../View/articleView.php';
  }
 }
?>
