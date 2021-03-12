<?php
 include_once("Model/Schedule.php");

 Class ScheduleControllor{
  public $schedule;

  public function schedule()
  {
   $this->schedule=new Schedule();
  }

  public function shows()
  { 
    header ("location: ../View/teacherView.php");
  }
  public function insert()
  { 
    $this->schedule=new Schedule();
    
    $result = $this->schedule->insert_data();
    echo $result;
    

  }
 }
?>