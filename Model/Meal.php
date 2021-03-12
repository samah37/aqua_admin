<?php
  
 Class Meal{
   
    public $host = "localhost";  
    public $username = "root";  
    public $password = "";  
    public $database = "admin_aqua";  
    public $message = "";
    public $connect;
  public function Meal()
  {
    session_start();  
    
    $this->connect = new PDO("mysql:host=$this->host; dbname=$this->database", $this->username, $this->password);  
    $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
  }

  public function update_data()
  {
    
    
   if (isset($_POST['day']) && isset($_POST['end'])) {
    if(empty($_POST["day"]) || empty($_POST["starter"]) || empty($_POST["main"]) || empty($_POST["dessert"]) || empty($_POST["end"]) )  
    {  
         return " fields are required ";  
         echo " fields are required ";  
    } 
    else{ 
     $day=$_POST["day"];
     $main=$_POST["main"];
     $starter=$_POST["starter"]; 
     $dessert=$_POST["dessert"];
     $time=$_POST["end"];  
    
        

    $qry = "UPDATE meals SET starter= '$starter' , main= '$main' , dessert= '$dessert' , time= '$time' WHERE day= '$day'";
    $result = $this->connect->prepare($qry);  
    $result->execute();  
    if ($result) {
     return "Insert Data Successfully.";
     echo "Insert Data Successfully.";
    }
    else
    {
     return "Error...! Not Inserted.";
    }
   
}}
   else
   {
    return "";
   }
  }

      
 }
?>