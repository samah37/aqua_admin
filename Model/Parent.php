<?php
  
 Class Parents{
   
    public $host = "localhost";  
    public $username = "root";  
    public $password = "";  
    public $database = "admin_aqua";  
    public $message = "";
    public $connect;
  public function Parents()
  {
    session_start();  
    
    $this->connect = new PDO("mysql:host=$this->host; dbname=$this->database", $this->username, $this->password);  
    $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
  }

  public function insert_data()
  {
   
    
   if (isset($_POST['Name']) && isset($_POST['Family_Name'])) {
    if(empty($_POST["Name"]) || empty($_POST["Family_Name"]) || empty($_POST["Adress"]) || empty($_POST["Email"]) || empty($_POST["Phone1"]))  
    {  
         return " fields are required ";  
         echo " fields are required ";  
    } 
    else{ 
        
    $Name = $_POST['Name'];
    $Family_Name = $_POST['Family_Name'];
    $Adress = $_POST['Adress'];
    $Email = $_POST['Email'];
    $Phone1 = $_POST['Phone1'];
    $Phone2 = $_POST['Phone2'];
    $Phone3 = $_POST['Phone3'];
  
   
   


    $qry = "INSERT INTO parents (`id_parent`, `name`, `family_name`, `adresse`, `phone1`, `phone2`, `phone3`, `email`) VALUES (NULL, '$Name', '$Family_Name', '$Adress', '$Phone1', '$Phone2', '$Phone3', '$Email')";
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