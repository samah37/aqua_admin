<?php
 include_once("Model/Contact.php");

 Class contactControllor{
  public $contact;

  public function contact()
  {
   $this->contact=new Contact();
  }

  public function shows()
  { 
    header ("location: ../View/contactView.php");
  }
  public function update()
  { 
    $this->contact=new Contact();
    
    $result = $this->contact->update_data();
    echo $result;
    

  }
 }
?>