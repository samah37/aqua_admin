<?php
  
 Class Schedule{
   
    public $host = "localhost";  
    public $username = "root";  
    public $password = "";  
    public $database = "admin_aqua";  
    public $message = "";
    public $connect;
  public function Schedule()
  {
    session_start();  
    
    $this->connect = new PDO("mysql:host=$this->host; dbname=$this->database", $this->username, $this->password);  
    $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
  }

  public function insert_data()
  {
     echo $_POST['browser'];
    
 
    if(empty($_POST["start"]) || empty($_POST["end"]) || empty($_POST["browser"]) || empty($_POST["class"]) || empty($_POST["classroom"]) || empty($_POST["teacher"]) || empty($_POST["day"])|| empty($_POST["sy"]))  
    {  
         return " fields are required ";  
         echo " fields are required ";  
    } 
    else{ 
        
    $start = $_POST['start'];
    $end = $_POST['end'];
    $class = $_POST['class'];
    $classroom = $_POST['classroom'];
   $teacher=$_POST["teacher"];
   $day=$_POST["day"];
   $sy=$_POST["sy"];
    $browser = $_POST['browser'];
   $class=$_POST["class"];
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
             'name_class'     =>     $_POST["class"],  
             'id_level' => $browser,
              
        )  
   ); 
   $class=$statement1->fetchColumn(); 
   /***********id of the teacher***** */
   $query2= "SELECT * FROM teachers WHERE family_name= :name  ";
   $statement2 = $this->connect->prepare($query2);  
   $statement2->execute(  
        array(  
             'name'     =>     $_POST["teacher"],  
              
        )  
   );  
   
   $teacher=$statement2->fetchColumn(); 
   /***** Vérifier si le professeur n'est pas pris cette séance */
  
     $request1 ="SELECT * FROM session WHERE h_start='$start' and h_end= '$end' and id_teacher='$teacher' and day='$day' ";
     $try1= $this->connect->prepare($request1);
     $try1->execute();
     $exis=$try1->rowCount(); 
     if($exis>0){echo "prof pris";}
     else{ 
/***** Vérifier si la classe n'est pas prise cette séances */
$request2 ="SELECT * FROM session WHERE h_start='$start' and h_end= '$end' and id_class='$class' and day='$day' ";
$try2= $this->connect->prepare($request2);
$try2->execute();
$exis=$try2->rowCount(); 
if($exis>0){echo "classe prise";}
else{


    $qry = "INSERT INTO `session` (`id_session`, `h_start`, `h_end`, `id_teacher`, `id_class`, `id_classrooms`, `day`, `id_sy`) VALUES (NULL, '$start', '$end', '$teacher', '$class', '$classroom', '$day', '$sy')";
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
  }}

      
 }
?>