<?php
session_start();
//require_once("php/connect.php");
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

    <title>BLACKBOARD - View Assignments</title>
</head>

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
                <li><a href="rViewClass.php"> View My Classes</a></li>
                <li><a href="admindisplay.php"> Display All Students</a></li>
                <li class="active"><a href="rViewAssignments.php"> Display All Assignments</a></li>
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
	
	<div id= "tableheader" style="float:left; height:50px; width:825px; border-bottom: solid 2px rgba(0,0,0,1); text-align: center; text-decoration:none;"> 
	
	<a style="text-decoration:none;">Assignments</a>

	</div>

<!-- PHP CODE FOR VIEWING CLASS TABLE-->
<?php
// Create connection
$con = mysqli_connect("localhost","heyfais1_bbdb2","Rangers17!","heyfais1_bbdb");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL DB: " . mysqli_connect_error();
  }

$id = $_POST['class_id'];

$sql = "SELECT * FROM assignments WHERE class_id = '$id'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div id='tablecolumn' class= 'tablecolumn' style='height:75px; width:825px; float:left; border-bottom: solid 1px rgba(0,0,0,1); line-height:75px;  text-decoration: none;'>
        			
       				<a style='margin-right:25px; text-decoration:none;  '> Title: </a>  ". $row["assign_title"]. " <a style='margin-right:25px; margin-left:25px; text-decoration:none;'> Description: </a> ". $row["assign_desc"]. " 
       				
       				
       				<a style='margin-left:25px; text-decoration:none; ' href='rUploads/". $row["file"]. " '> Here</a>
       				
       				<form action='rDeleteAssign.php' method='post' style='float:right; padding-top:30px;'>
       				
       				<input type='hidden' value='".$id."' name='class_id' />
        			
        			<button type='submit' name='assign_id' value='".$row["assign_id"]."' style=' float:left; height:21px; line-height:18px; width:50px; font-size:11px; margin-left:5px;'> Delete </button>
        					
        					
        				</form>
       					
        			
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