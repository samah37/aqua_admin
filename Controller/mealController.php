<?php
 include_once("Model/Meal.php");

 Class mealControllor{
  public $meal;

  public function meal()
  {
   $this->meal=new Meal();
  }

  public function shows()
  { 
    header ("location: ../View/teacherView.php");
  }
  public function update()
  { 
    $this->meal=new Meal();
    
    $result = $this->meal->update_data();
    echo $result;
    

  }
 }
?>