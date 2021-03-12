<?php
  
 Class Show{
   
    public $host = "localhost";  
    public $username = "root";  
    public $password = "";  
    public $database = "admin_aqua";  
    public $message = "";
    public $connect;
  public function Show()
  {
    session_start();  
    
    $this->connect = new PDO("mysql:host=$this->host; dbname=$this->database", $this->username, $this->password);  
    $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
  }

  public function insert_data()
  {
   
   if (isset($_POST['img'])) {
    echo "essayershow";
   
    $path_file_ext= $_POST['img'];
    






   
   
   


    $qry = "INSERT INTO `shows` (`id_show`, `pic`) VALUES (NULL, '$path_file_ext')";
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
