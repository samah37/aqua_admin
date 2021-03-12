<?php
  
 Class Article{
   
    public $host = "localhost";  
    public $username = "root";  
    public $password = "";  
    public $database = "admin_aqua";  
    public $message = "";
    public $connect;
  public function Article()
  {
    session_start();  
    
    $this->connect = new PDO("mysql:host=$this->host; dbname=$this->database", $this->username, $this->password);  
    $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
  }

  public function insert_data()
  {
    $Secondary="";
    $Primary="";
    $optous1="";
    $Middle="";
    $Parent="";
   if (isset($_POST['article']) && isset($_POST['Description'])) {
    $article = $_POST['article'];
    $description1 = $_POST['Description'];
    $picture = $_POST['avatar'];
    if(empty($_POST['ALL'])){$optous1="0";
      if(empty($_POST['Primary'])){$Primary="0";}else{  $Primary=$_POST['Primary'];}
      if(empty($_POST['Middle'])){$Middle="0";}else{$Middle=$_POST['Middle'];}
      if(empty($_POST['Secondary'])){$Secondary="0";}else{ $Secondary=$_POST['Secondary'];}
      if(empty($_POST['Parent'])){$Parent="0";}else{$Parent=$_POST['Parent'];}
    }else{ 
      $optous1=$_POST['ALL'];
      $Primary="1";
      $Middle="1";
      $Secondary="1";
      $Parent="1";
    }
   


    $qry = "INSERT INTO articles ( titre, image, description, optous, opprimary, opmiddle, opsecondary, opparent) VALUES ('$article' , '$picture' , '$description1', '$optous1' ,'$Primary', '$Middle', '$Secondary', '$Parent')";
    $result = $this->connect->prepare($qry);  
    $result->execute();  
    if ($result) {
     return "Insert Data Successfully.";
    }
    else
    {
     return "Error...! Not Inserted.";
    }
   }
   else
   {
    return "";
   }
  }
 }
?>
