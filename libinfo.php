<?php
    session_start();
    $update_msg="";
    if(!isset($_SESSION['uid']))
            {
                    header("location: index.php");
            }
    if(isset($_SESSION['update_success']))
    {
        $update_msg="Book Successfully Updated !";
        unset($_SESSION['update_success']);
    }
    

    $uid = $_SESSION["uid"];
?>

<html>

<head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/jquery-1.12.2.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <title> Dashboard </title>
</head>

<body>

<?php

				if(isset($_SESSION['success']))
            	{
            					?> <div class="alert alert-success">
                                  <a href="#" class="close" data-dismiss="alert" aria-label="close" hide="true" id="xxx">&times;</a>
                                  <strong text-align="center">Success: U !</strong>
                                </div>
                                <?php
                                session_destroy();
            	}

            ?>
<nav class="navbar navbar-inverse">

    <div class="container-fluid">

        <!-- Logo -->
        <div class="navbar-header">
            <a hre="#" class="navbar-brand" /> ABS LIBRARY MANAGEMENT SYSTEM </a>
        </div>

        <!-- Menu on Left -->
        <div>
            <ul class="nav navbar-nav">
                <li class="active"  > <a href="userhome.php"> Home </a> </li>
                
                <li > <a href="usersearch.php"> Search  Book</a> </li>
				<li > <a href="reserve.php"> View Reserved Books</a> </li>
				<li > <a href="display.php"> Display All Books</a> </li>
				
				
			

            </ul>


            <!-- Menu on the right -->
			
            <ul class="nav navbar-nav navbar-right">
			
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $uid ; ?> <span class="caret"></span></a>
					
                    
					<ul class="dropdown-menu">
					<li> <a href=""> Library Information</a> </li>
                        <li><a href="php/logout.php">Log-Out</a></li>
						

                    </ul>
                </li>

            </ul>


        </div>

    </div>

</nav>


<div class="container-fluid" style="background-color:WHITE >

    <div class="row" >

        <div class="col-xs-2" >

        </div>

        <div class="col-xs-18" style="background-color:WHITE ">
            
            

            <div class="jumbotron">
                <h1>ABS LIBRARY MANAGEMENT SYSTEM</h1>
                <p></P>

            <br/><br/>
            <h3 align="center" class="text-success"><?php echo $update_msg ; ?></h3>

            

        </div>

        <div class="col-xs-2" >

        </div>

    </div>

</div>

<?php



require_once("php/connect.php");
$uid = $_SESSION['uid'];

$result = mysqli_query($con," select * from user where name = '$uid' ");

$data = mysqli_fetch_Array($result); 



$libresult = mysqli_query($con," select * from  lib where libid = '$data[5]' ");



while($libdata =  mysqli_fetch_Array($libresult))

{
	
echo "<label for='libid'>Library ID</label>                           " .$libdata[0];
		echo "<br><label for='libid'>Library Name</label> " .$libdata[1];
		echo "<br><label for='libid'>Library Location</label> " .$libdata[2];
		echo "<br><label for='libid'>User Id</label> " .$data[0];
		echo "<br><label for='libid'>User Name</label> " .$data[1]; 

}	
?>
</body>

</html>