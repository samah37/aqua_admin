<?php
  
    include_once("Controller/teacherControllor.php");
   
 $teacher= new teacherControllor();
 if(isset($_POST['submit'])){
 $teacher->insert();
 
   }
   if(isset($_POST['update'])){
    
    $teacher->update();
    
      }
      if(isset($_POST['delete'])){
    
        $teacher->delete();
        
          }
   
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Add new teacher</title>

 
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
            <a class="active" href="javascript:;">
              <i class="fa fa-users"></i>
              <span>User manager</span>
              </a>
            <ul class="sub">
              
              <li class="active"><a href="teacherView.php">Add new teacher</a></li>
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
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Fill in the form to add a new teacher</h3>
       
        <div class="row mt">
          <div class="col-lg-12">
            
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="">
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Name</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="Name" name="Name" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Family Name</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="Family Name" name="Family Name" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Adress</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="Adress" name="Adress" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="Email" name="Email" type="email" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Phone1</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="Phone1" name="Phone1" type="tel" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Phone2</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="Phone2" name="Phone2" type="tel" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Phone3</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="Phone3" name="Phone3" type="tel" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Topic</label>
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
         
                               $stmnt=$conn->prepare("SELECT * FROM topic ");
                              $stmnt->execute();
                              $details=$stmnt->fetchAll();
                              foreach($details as $detail){
         
                              ?>
                              <option value=<?php          echo $detail['name_topic'];?>>
                               <?php }?>
    
                              </datalist>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Reception day</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="day" name="day" type="text" />
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-md-3">Reception starting time</label>
                  <div class="col-md-4">
                    <div class="input-group bootstrap-timepicker">
                      <input type="time" class="form-control timepicker-24" name="start">
                      
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Reception ending time</label>
                  <div class="col-md-4">
                    <div class="input-group bootstrap-timepicker">
                      <input type="time" class="form-control timepicker-24" name="end">
                     
                    </div>
                  </div>
                </div>
                  

                
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="submit">Add</button>
                      <button class="btn btn-theme03" type="submit" name="update">Update</button>
                      <button class="btn btn-theme04" type="submit"name="delete" >Delete</button>
                      <button class="btn btn-theme02" type="reset">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        
        </div>
       
      </section>
     
    </section>
  
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
