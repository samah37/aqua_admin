<?php
 include_once("Model/Student.php");

 Class StudentControllor{
  public $student;

  public function student()
  {
   $this->teacher=new Student();
  }

  public function shows()
  { 
    header ("location: ../View/teacherView.php");
  }
  public function insert()
  { 
    $this->student=new Student();
    
    $result = $this->student->insert_data();
    echo $result;
    

  }
  public function update()
  { 
    $this->student=new Student();
    
    $result = $this->student->update_data();
    echo $result;
    

  }
  public function delete()
  { 
    $this->student=new Student();
    
    $result = $this->student->delete_data();
    echo $result;
    

  }
 }
?>