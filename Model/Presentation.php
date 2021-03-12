<?php
  
 Class Presentation{
   
    public $host = "localhost";  
    public $username = "root";  
    public $password = "";  
    public $database = "admin_aqua";  
    public $message = "";
    public $connect;
  public function Presentation()
  {
    session_start();  
    
    $this->connect = new PDO("mysql:host=$this->host; dbname=$this->database", $this->username, $this->password);  
    $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
  }

  public function insert_data()
  {
   if (isset($_POST['Title']) && isset($_POST['Paragraph'])) {
    if(empty($_POST["Title"]) || empty($_POST["Paragraph"]))  
    {  
         return " fields are required ";  
         echo "hahah";
    } 
    else{ 
    $Title = $_POST['Title'];
    $Paragraph = $_POST['Paragraph'];
    $picture = $_POST['avatar'];
    if(empty($_POST['avatar'])){$picture="";}else{  $picture = $_POST['avatar'];}
   


    $qry = "INSERT INTO presentation (title, paragraph, image) VALUES ('$Title' , ' $Paragraph' , ' $picture')";
    $result = $this->connect->prepare($qry);  
    $result->execute();  
    if ($result) {
     return "Insert Data Successfully.";
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