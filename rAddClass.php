<?php



//include 'connect.php';
include 'rNavBar.php';
include 'rTempBody.php';


//start
$conn=mysqli_connect("localhost","root","root","blackboard_db");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}

//end

?>

 <?php

  if(isset($_POST['submit']))
{
    $sql = "INSERT INTO classes (class_title, class_desc)
    VALUES ('".$_POST["class_title"]."','".$_POST["class_desc"]."')";

    $result = mysqli_query($conn,$sql);
}

?>

<div id="formdiv">

<div id="formcontainer">

<h3 style="margin-bottom:25px;">Would You like To Add A Class</h3>

<form method="post">
	
	<input type="text" name="class_title" id="title" placeholder="Course Name" maxlength="7">
	
	<textarea type="text" name="class_desc" maxlength="40" id="desc" placeholder="Description of Class"></textarea>
	
	<input type="submit" name="submit" value="submit" style="margin-top:25px; float:right; background:rgba(150,235,120,1); text-align:left;" >
</form>


<br> 

	</div>
</div>
<!--
<?php

$host = "localhost";
$username ="root";
$password = "root";
$dbname = "blackboard_db";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM classes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> - Class: ". $row["class_title"]. " " . $row["class_desc"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 
-->