<?php
session_start();
require_once("php/connect.php");

//include 'connect.php';
include 'rNavBar.php';
include 'rTempBody.php';
?>


<div id="tablediv">
	<div id="tablecontainer" font-size:20px;>
	
	<div id= "tableheader" style="float:left; height:50px; width:825px; border-bottom: solid 2px rgba(0,0,0,1); text-align: center;"> 
	
	
	<div style="width:100px; float: left;"> <a> Title </a></div>  
	
	<div style="width:350px; float:left;"><a> Description </a></div>
	
	<div style="width:300px; float:left;"><a> Would you like to view or add an assignments </a></div></div>

<!-- PHP CODE FOR VIEWING CLASS TABLE-->

<?php
/*
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
*/
$sql = "SELECT * FROM classes";
$result = $conn->query($sql);

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

$conn->close();
?> 

<!-- END PHP CODE-->

	</div>
</div>