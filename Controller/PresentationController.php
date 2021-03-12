<?php
 include_once("Model/Presentation.php");

 Class PresentationController{
  public $presentation;

  public function Presentation()
  {
   $this->presentation=new Presentation();
  }

  public function shows()
  { $this->presentation=new Presentation();
    
   $result = $this->presentation->insert_data();
 
  }
 }
?>