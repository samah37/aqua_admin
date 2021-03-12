<?php
  
 Class Student{
   
    public $host = "localhost";  
    public $username = "root";  
    public $password = "";  
    public $database = "admin_aqua";  
    public $message = "";
    public $connect;
  public function Student()
  {
    session_start();  
    
    $this->connect = new PDO("mysql:host=$this->host; dbname=$this->database", $this->username, $this->password);  
    $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
  }

  public function insert_data()
  {
     echo $_POST['browser'];
    
   if (isset($_POST['Name']) && isset($_POST['Family_Name'])) {
    if(empty($_POST["Name"]) || empty($_POST["Family_Name"]) || empty($_POST["Adress"]) || empty($_POST["Email"]) || empty($_POST["Parent_Name"]) || empty($_POST["browser"]) || empty($_POST["Class"]))  
    {  
         return " fields are required ";  
         echo " fields are required ";  
    } 
    else{ 
        
    $Name = $_POST['Name'];
    $Family_Name = $_POST['Family_Name'];
    $Adress = $_POST['Adress'];
    $Email = $_POST['Email'];
   $parent=$_POST["Parent_Name"];
    $browser = $_POST['browser'];
   $class=$_POST["Class"];
   /*get the id of the class*/
   $query= "SELECT * FROM level WHERE name_level= :name_level  ";
   $statement0 = $this->connect->prepare($query);  
   $statement0->execute(  
        array(  
             'name_level'     =>     $_POST["browser"],  
              
        )  
   );  
   
   $browser=$statement0->fetchColumn(); 
   $query1= "SELECT * FROM classes WHERE name_class= :name_class and id_level= :id_level   ";
   $statement1 = $this->connect->prepare($query1);  
   $statement1->execute(  
        array(  
             'name_class'     =>     $_POST["Class"],  
             'id_level' => $browser,
              
        )  
   ); 
   $class=$statement1->fetchColumn(); 
   /*check if the parent exist or not*/
   $query2= "SELECT * FROM parents WHERE name= :name and family_name= :family_name   ";
   $statement2 = $this->connect->prepare($query2);  
   $statement2->execute(  
        array(  
             'name'     =>     $parent,  
             'family_name' => $Family_Name,
              
        )  
   ); 
   $count=$statement2->rowCount(); 
   echo $count;
   $id_parent=$statement2->fetchColumn(); 
   if($count>0){
        

    $qry = "INSERT INTO `students` (`id_student`, `name`, `family_name`, `email`, `adresse`, `id_tutor`, `id_class`) VALUES (NULL, '$Name', '$Family_Name', '$Email', '$Adress', '$id_parent', '$class')";
    
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
   }else{echo "non";
header("location: parentView.php"); 

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
     $Name = $_POST['Name'];
     $Family_Name = $_POST['Family_Name'];
     $Adress = $_POST['Adress'];
     $Email = $_POST['Email'];
    $parent=$_POST["Parent_Name"];
     $browser = $_POST['browser'];
    $class=$_POST["Class"];
    /*get the id of the class*/
    $query= "SELECT * FROM level WHERE name_level= :name_level  ";
    $statement0 = $this->connect->prepare($query);  
    $statement0->execute(  
         array(  
              'name_level'     =>     $_POST["browser"],  
               
         )  
    );  
    
    $browser=$statement0->fetchColumn(); 
    $query1= "SELECT * FROM classes WHERE name_class= :name_class and id_level= :id_level   ";
    $statement1 = $this->connect->prepare($query1);  
    $statement1->execute(  
         array(  
              'name_class'     =>     $_POST["Class"],  
              'id_level' => $browser,
               
         )  
    ); 
    $class=$statement1->fetchColumn(); 
    /*check if the parent exist or not*/
    $query2= "SELECT * FROM parents WHERE name= :name and family_name= :family_name   ";
    $statement2 = $this->connect->prepare($query2);  
    $statement2->execute(  
         array(  
              'name'     =>     $parent,  
              'family_name' => $Family_Name,
               
         )  
    ); 
    $count=$statement2->rowCount(); 
    echo $count;
    $id_parent=$statement2->fetchColumn(); 
        
    
 

    $qry = "UPDATE teachers SET adresse='$Adress', email='$Email' WHERE name='$Name' AND family_name='$Family_Name'";
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
   }
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