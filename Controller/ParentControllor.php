<?php
 include_once("Model/Parent.php");

 Class ParentControllor{
  public $parent;

  public function parent()
  {
   $this->parent=new Parents();
  }

  public function shows()
  { 
    header ("location: ../View/teacherView.php");
  }
  public function insert()
  { 
    $this->parent=new Parents();
    
    $result = $this->parent->insert_data();
    echo $result;
    

  }
 }
?>