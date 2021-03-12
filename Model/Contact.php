<?php
  
 Class Contact{
   
    public $host = "localhost";  
    public $username = "root";  
    public $password = "";  
    public $database = "admin_aqua";  
    public $message = "";
    public $connect;
  public function Contact()
  {
    session_start();  
    
    $this->connect = new PDO("mysql:host=$this->host; dbname=$this->database", $this->username, $this->password);  
    $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
  }

  public function update_data()
  {
    
    
   if (isset($_POST['contact']) && isset($_POST['content'])) {
    if(empty($_POST["contact"]) || empty($_POST["content"]) || empty($_POST["link"]) )  
    {  
         return " fields are required ";  
         echo " fields are required ";  
    } 
    else{ 
     $contact=$_POST["contact"];
     $content=$_POST["content"];
     $link=$_POST["link"]; 
    
        

    $qry = "UPDATE contacts SET  link= '$content' , icon= '$link'  WHERE contact = '$contact'";
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