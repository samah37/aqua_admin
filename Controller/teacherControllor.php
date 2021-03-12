<?php
 include_once("Model/Teacher.php");

 Class teacherControllor{
  public $teacher;

  public function teacher()
  {
   $this->teacher=new Teacher();
  }

  public function shows()
  { 
    header ("location: ../View/teacherView.php");
  }
  public function insert()
  { 
    $this->teacher=new Teacher();
    
    $result = $this->teacher->insert_data();
    echo $result;
    

  }
  public function update()
  { 
    $this->teacher=new Teacher();
    
    $result = $this->teacher->update_data();
    echo $result;
    

  }
  public function delete()
  { 
    $this->teacher=new Teacher();
    
    $result = $this->teacher->delete_data();
    echo $result;
    

  }
 }
?>