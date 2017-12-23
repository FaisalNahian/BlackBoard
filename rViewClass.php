<?php
session_start();
//require_once("connect.php");
//include 'rNavBar.php';
include 'rTempBody.php';
?>
<head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="bootstrap/css/bootstrap1.css" rel="stylesheet">
    <link href="bootstrap/css/rStyle.css" rel="stylesheet">
    <script src="bootstrap/js/jquery-1.12.2.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <title>BLACKBOARD - Classes</title>
</head>

<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Logo -->
        <div class="navbar-header" >
            <a hre="home.php" class="navbar-brand"/>BLACKBOARD </a>
        </div>
        <!-- Menu on Left -->
        <div>
            <ul class="nav navbar-nav">
                <li> <a href="home.php"> Home</a></li>
                <li class="active"><a href="rViewClass.php"> View My Classes</a></li>
                <li><a href="admindisplay.php"> Display All Students</a></li>
                <li><a href="rViewAssignments.php"> Display All Assignments</a></li>
           </ul>
            <!-- Menu on the right -->
            <ul class="nav navbar-nav navbar-right">
               <li class="dropdown">         
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $uid ; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="update.php"><span class="glyphicon glyphicon-edit"></span> Edit Profile</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- end of container -->
</nav><!-- end of navigation -->

<div id="tablediv">
  <div id="tablecontainer" font-size:20px;>
  
  <div id= "tableheader" style="float:left; height:50px; width:825px; border-bottom: solid 2px rgba(0,0,0,1); text-align: center;"> 
  
  
  <div style="width:100px; float: left;"> <a> Title </a></div>  
  
  <div style="width:350px; float:left;"><a> Description </a></div>
  
  <div style="width:300px; float:left;"><a> View or add an assignments</a></div></div>

<!-- PHP CODE FOR VIEWING CLASS TABLE-->

<?php

// Create connection
$con = mysqli_connect("localhost","heyfais1_bbdb2","Rangers17!","heyfais1_bbdb");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL DB: " . mysqli_connect_error();
  }

$sql = "SELECT * FROM classes";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div id='tablecolumn' style='height:75px; width:825px; float:left; border-bottom: solid 1px rgba(0,0,0,1); line-height:75px;'>
              <div style='width:100px; float: left;'> 
                ". $row["class_title"]. "
              </div> 
              <div style='width:350px; float:left;'>
                " . $row["class_desc"] . "
              </div>
              
            
              <div style='width:375px; float:left;'>
              
              <form action='rViewAssignments.php' method='post' style='float:left; padding-top:30px;'>
              
              <button type='submit' name='class_id' value='".$row["class_id"]."' style=' float:left; height:21px; line-height:18px; width:50px; font-size:11px; margin-left:5px;'> View </button>
                  
                  
                </form> 
                  <form action='rUpload.php' method='post' enctype='multipart/form-data' style='float:left; padding-top:30px; margin-left:50px;'>
                    <input style=' float:left; width:200px;' id='upload' type='file' name='file'> 
                    
                    <input type='hidden' value='".$row["class_id"]."' name='class_id' />
                    
                    <button type='submit' name='btn-upload' style='float:left; height:21px; line-height:18px; width:50px; font-size:11px;' type='submit'> upload </button>
                  </form>
                  
              </div>
           </div>
           
            <br>";
        
    }
} else {
    echo "0 results";
}
$con->close();
?> 

<!-- END PHP CODE-->

  </div>
</div>


    </body>
</html>