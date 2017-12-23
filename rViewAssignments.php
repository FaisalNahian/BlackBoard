<?php
session_start();
require_once("php/connect.php");

//include 'connect.php';
include 'rNavBar.php';
include 'rTempBody.php';
/*
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
*/
 $id = $_POST['class_id'];
 

?>



<div id="tablediv">
	<div id="tablecontainer" font-size:20px;>
	
	<div id= "tableheader" style="float:left; height:50px; width:825px; border-bottom: solid 2px rgba(0,0,0,1); text-align: center; text-decoration:none;"> 
	
	<a style="text-decoration:none;">Assignments</a>

	</div>

<!-- PHP CODE FOR VIEWING CLASS TABLE-->

<?php


$sql = "SELECT * FROM assignments WHERE class_id = '$id'";
$result = $conn->query($sql);

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

$conn->close();
?> 

<!-- END PHP CODE-->

	</div>
</div>