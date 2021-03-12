<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Display articles</title>

  
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

 
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
 
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

 
</head>

<body>
  
<section id="container">
    
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
     
      <a href="index.php" class="logo"><b>Charting your <span>CHILD</span>'s future</b></a>
     
      <div class="nav notify-row" id="top_menu">
        
         
      <div class="top-menu">
      
      </div>
    </header>
   
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          
          
          <p class="centered"><a href="profile.html"><img data-placement="left" src="img/Artboard 5.png"  width="150"></a></p> 
         
          <li class="mt">
            <a  href="index.php">
              <i class="fa fa-home"></i>
              <span>Home</span>
              </a>
          </li>
          <!-- Presentation Mangement-->
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Presentation manager</span>
              </a>
            <ul class="sub">
              
              <li><a href="presentationView.php">Add presentation</a></li>
             
              <li><a href="presentation.php">School presentation</a></li>
             
            </ul>
          </li>
           <!-- Article Mangement-->
           <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-edit"></i>
              <span>Article manager</span>
              </a>
            <ul class="sub">
              
              <li><a href="articleView.php">Add article</a></li>
             
              <li class="active"><a href="Articles.php">Display articles</a></li>
             
            </ul>
          </li>
          <!-- Users Mangement-->
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-users"></i>
              <span>User manager</span>
              </a>
            <ul class="sub">
              
              <li><a href="teacherView.php">Add new teacher</a></li>
              <li><a href="studentView.php">Add new student</a></li>
              <li><a href="parentView.php">Add new parent</a></li>
             
            </ul>
          </li>
           <!-- Schedule Mangement-->
           <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-calendar-o"></i>
              <span>Schadule manager</span>
              </a>
            
          </li>
          <!-- Meal Mangement-->
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cutlery"></i>
              <span>Meal manager</span>
              </a>
            
          </li>
           <!-- Teacher Mangement-->
           <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-male"></i>
              <span>Teacher manager</span>
              </a>
            
          </li>
          <!-- Contact Mangement-->
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-phone-square"></i>
              <span>Contact manager</span>
              </a>
            
          </li>
           <!-- shows Mangement-->
           <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-picture-o"></i>
              <span>Shows manager</span>
              </a>
            
          </li>
         
          <p class="centered"><a href="profile.html"><img data-placement="left" src="img/Artboard_3.png"  width="80"></a></p>    
         
    </aside>
   
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Aqua School presentation visible for all: </h3>
        <?php
        $host = "localhost";  
        $username = "root";  
        $password = "";  
        $database = "admin_aqua";  
        $message = "";  
       
       
           $conn = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
         $stmnt=$conn->prepare("SELECT * FROM `articles` WHERE optous ='1'");
         $stmnt->execute();
         $details=$stmnt->fetchAll();
        foreach($details as $detail){
          
        
        ?>
        <div class="row content-panel mt mb">
          <div class="col-md-6">
            <h2 contenteditable="true"><?php echo $detail['titre'];?></h2>
            <h3 contenteditable="true"><?php echo $detail['titre'];?></h3>
            <h4 contenteditable="true"><?php echo $detail['titre'];?></h4>
          </div>
          <div class="col-md-6">
          <?php          echo "jomla";?>
          <?php          echo $detail['image'];?>
            <p contenteditable="true" class="mt"><?php          echo $detail['description'];?></p>
            <p contenteditable="true"><?php          echo $detail['description'];?></p>
            <p contenteditable="true"><?php          echo $detail['description'];?></p>
            <p contenteditable="true"><?php          echo $detail['description'];?></p>
          </div>
          <a class="fancybox" href="img/portfolio/<?php          echo $detail['image'];?>"><img class="img-responsive" src="img/portfolio/<?php          echo $detail['image'];?>" alt=""></a>
        </div>
        <div class="mt"></div>
        <?php }?>
        <h3><i class="fa fa-angle-right"></i> Aqua School presentation visible for primary: </h3>
        <?php
        $host = "localhost";  
        $username = "root";  
        $password = "";  
        $database = "admin_aqua";  
        $message = "";  
       
       
           $conn = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
         $stmnt=$conn->prepare("SELECT * FROM `articles` WHERE opprimary ='1'");
         $stmnt->execute();
         $details=$stmnt->fetchAll();
        foreach($details as $detail){
          
        
        ?>
        <div class="row content-panel mt mb">
          <div class="col-md-6">
            <h2 contenteditable="true"><?php echo $detail['titre'];?></h2>
            <h3 contenteditable="true"><?php echo $detail['titre'];?></h3>
            <h4 contenteditable="true"><?php echo $detail['titre'];?></h4>
          </div>
          <div class="col-md-6">
            <p contenteditable="true" class="mt"><?php          echo $detail['description'];?></p>
            <p contenteditable="true"><?php          echo $detail['description'];?></p>
            <p contenteditable="true"><?php          echo $detail['description'];?></p>
            <p contenteditable="true"><?php          echo $detail['description'];?></p>
          </div>
        </div>
        <div class="mt"></div>
        <?php }?>
        <h3><i class="fa fa-angle-right"></i> Aqua School presentation visible for Middle: </h3>
        <?php
        $host = "localhost";  
        $username = "root";  
        $password = "";  
        $database = "admin_aqua";  
        $message = "";  
       
       
           $conn = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
         $stmnt=$conn->prepare("SELECT * FROM `articles` WHERE opmiddle ='1'");
         $stmnt->execute();
         $details=$stmnt->fetchAll();
        foreach($details as $detail){
          
        
        ?>
        <div class="row content-panel mt mb">
          <div class="col-md-6">
            <h2 contenteditable="true"><?php echo $detail['titre'];?></h2>
            <h3 contenteditable="true"><?php echo $detail['titre'];?></h3>
            <h4 contenteditable="true"><?php echo $detail['titre'];?></h4>
          </div>
          <div class="col-md-6">
            <p contenteditable="true" class="mt"><?php          echo $detail['description'];?></p>
            <p contenteditable="true"><?php          echo $detail['description'];?></p>
            <p contenteditable="true"><?php          echo $detail['description'];?></p>
            <p contenteditable="true"><?php          echo $detail['description'];?></p>
          </div>
        </div>
        <div class="mt"></div>
        <?php }?>
        <h3><i class="fa fa-angle-right"></i> Aqua School presentation visible for secondary: </h3>
        <?php
        $host = "localhost";  
        $username = "root";  
        $password = "";  
        $database = "admin_aqua";  
        $message = "";  
       
       
           $conn = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
         $stmnt=$conn->prepare("SELECT * FROM `articles` WHERE opsecondary ='1'");
         $stmnt->execute();
         $details=$stmnt->fetchAll();
        foreach($details as $detail){
          
        
        ?>
        <div class="row content-panel mt mb">
          <div class="col-md-6">
            <h2 contenteditable="true"><?php echo $detail['titre'];?></h2>
            <h3 contenteditable="true"><?php echo $detail['titre'];?></h3>
            <h4 contenteditable="true"><?php echo $detail['titre'];?></h4>
          </div>
          <div class="col-md-6">
            <p contenteditable="true" class="mt"><?php          echo $detail['description'];?></p>
            <p contenteditable="true"><?php          echo $detail['description'];?></p>
            <p contenteditable="true"><?php          echo $detail['description'];?></p>
            <p contenteditable="true"><?php          echo $detail['description'];?></p>
          </div>
        </div>
        <div class="mt"></div>
        <?php }?>
        <h3><i class="fa fa-angle-right"></i> Aqua School presentation visible for parents: </h3>
        <?php
        $host = "localhost";  
        $username = "root";  
        $password = "";  
        $database = "admin_aqua";  
        $message = "";  
       
       
           $conn = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
         $stmnt=$conn->prepare("SELECT * FROM `articles` WHERE opparent ='1'");
         $stmnt->execute();
         $details=$stmnt->fetchAll();
        foreach($details as $detail){
          
        
        ?>
        <div class="row content-panel mt mb">
          <div class="col-md-6">
            <h2 contenteditable="true"><?php echo $detail['titre'];?></h2>
            <h3 contenteditable="true"><?php echo $detail['titre'];?></h3>
            <h4 contenteditable="true"><?php echo $detail['titre'];?></h4>
          </div>
          <div class="col-md-6">
            <p contenteditable="true" class="mt"><?php          echo $detail['description'];?></p>
            <p contenteditable="true"><?php          echo $detail['description'];?></p>
            <p contenteditable="true"><?php          echo $detail['description'];?></p>
            <p contenteditable="true"><?php          echo $detail['description'];?></p>
          </div>
        </div>
        <div class="mt"></div>
        <?php }?>
      </section>
     
    </section>
    
   
  </section>
 
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
 
  <script src="lib/common-scripts.js"></script>
 
  <script src="lib/ckeditor/ckeditor.js"></script>

</body>

</html>
