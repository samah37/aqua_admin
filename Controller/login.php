<?php  
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "admin_aqua";  
 $message = "";  
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM admin WHERE username = :username AND passwd = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location: ../index.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  
 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/login.css">
<style>

</style>
</head>
<body>
   
<div class="bg">
    <div class="bg-img"></div>
     
        <div class="form" method="post">
          <div class="login">
            <div class="login-header">
                <div class="bg-logo"></div>
              </br>
             </br>
              </br>
              </br></br>
              
              <p></br></br>Please enter your credentials to login.</p>
            </div>
          <form class="login-form" method="post">
            <input type="text" name="username" class="form-control" />
            
            <input type="password" name="password" class="form-control"/>
          
            <button name="login">login</button>
            
          </form>
        </div>
       </div>

      
</div>




</body>
</html>