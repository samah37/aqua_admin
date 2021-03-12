<?php
  
    include_once("Controller/scheduleControllor.php");
   
 $schedule= new scheduleControllor();
 if(isset($_POST['submit'])){
 $schedule->insert();
 
   }

 
?>
<!DOCTYPE html>
<html lang="en">

<head>
 
  <title>schedule</title>

  
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
            <a href="javascript:;">
              <i class="fa fa-edit"></i>
              <span>Article manager</span>
              </a>
            <ul class="sub">
              
              <li><a href="articleView.php">Add article</a></li>
             
              <li><a href="Articles.php">Display articles</a></li>
             
            </ul>
          </li>
          <!-- Users Mangement-->
          <li class="sub-menu">
            <a  href="javascript:;">
              <i class="fa fa-users"></i>
              <span>User manager</span>
              </a>
            <ul class="sub">
              
              <li ><a href="teacherView.php">Add new teacher</a></li>
              <li><a href="studentView.php">Add new student</a></li>
              <li><a href="parentView.php">Add new parent</a></li>
             
            </ul>
          </li>
           <!-- Schedule Mangement-->
           <li class="sub-menu">
            <a class="active" href="javascript:;">
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
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Fill in the form to add the session</h3>
       
        <div class="row mt">
          <div class="col-lg-12">
            
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="">
                <div class="form-group">
                  <label class="control-label col-md-3">Session starting time</label>
                  <div class="col-md-4">
                    <div class="input-group bootstrap-timepicker">
                      <input type="time" class="form-control timepicker-24" name="start">
                      
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Session ending time</label>
                  <div class="col-md-4">
                    <div class="input-group bootstrap-timepicker">
                      <input type="time" class="form-control timepicker-24" name="end">
                     
                    </div>
                  </div>
                </div>
                 
                   
                <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Level</label>
                    <div class="col-lg-10">
                      <input class=" form-control" list="browsers" name="browser" id="browser" >
                      <datalist id="browsers">
                      <?php
                        $host = "localhost";  
                         $username = "root";  
                        $password = "";  
                        $database = "admin_aqua";  
                          $message = "";  
        
        
                               $conn = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
                               $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
                               $stmnt=$conn->prepare("SELECT * FROM level ");
                              $stmnt->execute();
                              $details=$stmnt->fetchAll();
                              foreach($details as $detail){
         
                              ?>
                              <option value=<?php          echo $detail['name_level'];?>>
                               <?php }?>
    
                              </datalist>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Class</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="class" name="class" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Classroom</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="classroom" name="classroom" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Teacher</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="teacher" name="teacher" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Day</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="day" name="day" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">School year</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="sy" name="sy" type="text" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="submit">Add</button>
                      <button class="btn btn-theme04" type="reset">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
           
          </div>
         
        </div>
       
      </section>
     
    </section>
    <section id="main-content">
      
        
         
          
    <?php
                        $host = "localhost";  
                         $username = "root";  
                        $password = "";  
                        $database = "admin_aqua";  
                          $message = "";  
        
        
                               $conn = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
                               $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
                               $stmnt2=$conn->prepare("SELECT * FROM classes ORDER BY id_level");
                              $stmnt2->execute();
                              $details2=$stmnt2->fetchAll();

                              foreach($details2 as $detail2){
                                $group=$detail2['id_class'];
                                ?>
                                <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Schedule Group:<?php          echo $detail2['name_class']; echo " -- "; echo $detail2['id_level']; ?> </h3>
                                <div class="row">
       <div class="col-md-12">
      <div class="content-panel">
              
              
              <table class="table">
                <thead>
                  <tr>
                    <th>Day</th>
                    <th>Session1</th>
                    <th>Session2</th>
                    <th>Session3</th>
                    <th>Session4</th>
                    <th>Session5</th>
                    <th>Session6</th>
                    <th>Session7</th>
                  </tr>
                </thead>
                <tbody>
                
                  <?php
                       
         
                               $stmnt=$conn->prepare("SELECT * FROM meals ");
                              $stmnt->execute();
                              $details=$stmnt->fetchAll();

                              foreach($details as $detail){
                                $day= $detail['day'];?>
                                 <tr>
                                 <td><?php          echo $detail['day'];?></td>
                                 <?php
                               $stmnt1=$conn->prepare("SELECT * FROM session WHERE day= '$day' AND id_class= '$group' ORDER BY h_start ");
                               $stmnt1->execute();
                               $details1=$stmnt1->fetchAll();
                               foreach($details1 as $detail1){
         
                              ?>
                                
                    <td><?php          echo $detail1['h_start']; echo " -- "; echo $detail1['h_end']; ?>
                    <br></br><?php          echo "Class:"; echo $detail1['id_classrooms'];?></td>
                    
                             
                              
                    
                 
                  <?php }?>
                  </tr>
                  <?php }?>
                 
                </tbody>
              </table>
            </div>
          </div>
          <?php }?>
  </section>
  
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
 
  <script src="lib/common-scripts.js"></script>
 
  <script src="lib/form-validation-script.js"></script>

</body>

</html>
