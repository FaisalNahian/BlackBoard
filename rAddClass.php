<?php
session_start();
require_once("php/connect.php");

//include 'connect.php';
include 'rNavBar.php';
include 'rTempBody.php';
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

<h3 style="margin-bottom:25px;">Would You like To Add Assignments?</h3>

<form method="post">
	<input type="text" name="class_title" id="title" placeholder="Course Name" maxlength="7">
	<textarea type="text" name="class_desc" maxlength="40" id="desc" placeholder="Description of Assignment"></textarea>
	<input type="submit" name="submit" value="submit" style="margin-top:25px; float:right; background:rgba(150,235,120,1); text-align:left;" >
</form>


<br> 

	</div>
</div>