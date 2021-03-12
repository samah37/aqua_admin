<?php
  
 Class Teacher{
   
    public $host = "localhost";  
    public $username = "root";  
    public $password = "";  
    public $database = "admin_aqua";  
    public $message = "";
    public $connect;
  public function Teacher()
  {
    session_start();  
    
    $this->connect = new PDO("mysql:host=$this->host; dbname=$this->database", $this->username, $this->password);  
    $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
  }

  public function insert_data()
  {
   
    
   if (isset($_POST['Name']) && isset($_POST['Family_Name'])) {
    if(empty($_POST["Name"]) || empty($_POST["Family_Name"]) || empty($_POST["Adress"]) || empty($_POST["Email"]) || empty($_POST["Phone1"]) || empty($_POST["browser"]) || empty($_POST["day"]) || empty($_POST["start"])|| empty($_POST["end"]))  
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
    $browser = $_POST['browser'];
    $day = $_POST['day'];
    $start = $_POST['start'];
    $end = $_POST['end'];
   
   $query= "SELECT * FROM topic WHERE name_topic= :name_topic  ";
   $statement0 = $this->connect->prepare($query);  
   $statement0->execute(  
        array(  
             'name_topic'     =>     $_POST["browser"],  
              
        )  
   );  
   
   $browser=$statement0->fetchColumn(); 


    $qry = "INSERT INTO teachers (`id_teacher`, `name`, `family_name`, `adresse`, `phone1`, `phone2`, `phone3`, `start_recep`, `end_recep`, `email`, `id_topic`, `recep_day`) VALUES (NULL, '$Name', '$Family_Name', '$Adress', '$Phone1', '$Phone2', '$Phone3', '$start', '$end', '$Email', '$browser', '$day')";
    $result = $this->connect->prepare($qry);  
    $result->execute();  
    $qry1 = "INSERT INTO `users` (`id_user`, `email`, `password`) VALUES (NULL, '$Email', '$Name.$Family_Name')";
    $result1 = $this->connect->prepare($qry1);  
    $result1->execute();  
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
  public function update_data()
  {
   
    
   if (isset($_POST['Name']) && isset($_POST['Family_Name'])) {
    if(empty($_POST["Name"]) || empty($_POST["Family_Name"]) || empty($_POST["Adress"]) || empty($_POST["Email"]) || empty($_POST["Phone1"]) || empty($_POST["browser"]) || empty($_POST["day"]) || empty($_POST["start"])|| empty($_POST["end"]))  
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
    $browser = $_POST['browser'];
    $day = $_POST['day'];
    $start = $_POST['start'];
    $end = $_POST['end'];
   
   $query= "SELECT * FROM topic WHERE name_topic= :name_topic  ";
   $statement0 = $this->connect->prepare($query);  
   $statement0->execute(  
        array(  
             'name_topic'     =>     $_POST["browser"],  
              
        )  
   );  
   
   $browser=$statement0->fetchColumn(); 
 

    $qry = "UPDATE teachers SET adresse='$Adress', phone1='$Phone1', start_recep='$start', end_recep='$end', email='$Email', recep_day='$day' WHERE name='$Name' AND family_name='$Family_Name'";
    $result = $this->connect->prepare($qry);  
    $result->execute();  
    if ($result) {
     return "Update Data Successfully.";
     echo "Update Data Successfully.";
    }
    else
    {
     return "Error...! Not updated.";
    }
   }}
   else
   {
    return "";
   }
  }
  public function delete_data()
  {
   
    
   if (isset($_POST['Name']) && isset($_POST['Family_Name'])) {
   
        
    $Name = $_POST['Name'];
    $Family_Name = $_POST['Family_Name'];
    $Adress = $_POST['Adress'];
    $Email = $_POST['Email'];
    $Phone1 = $_POST['Phone1'];
    $Phone2 = $_POST['Phone2'];
    $Phone3 = $_POST['Phone3'];
    $browser = $_POST['browser'];
    $day = $_POST['day'];
    $start = $_POST['start'];
    $end = $_POST['end'];
   
   $query= "SELECT * FROM topic WHERE name_topic= :name_topic  ";
   $statement0 = $this->connect->prepare($query);  
   $statement0->execute(  
        array(  
             'name_topic'     =>     $_POST["browser"],  
              
        )  
   );  
   
   $browser=$statement0->fetchColumn(); 
 

    $qry = "DELETE FROM teachers WHERE name='$Name' AND family_name='$Family_Name'";
    $result = $this->connect->prepare($qry);  
    $result->execute();  
    if ($result) {
     return "Delete Data Successfully.";
     echo "Delete Data Successfully.";
    }
    else
    {
     return "Error...! Not deleted.";
    }
   }
  }
 
      
 }
?>
