<<<<<<< HEAD
<?php
    session_start();
	$update_msg="";


    if(!isset($_SESSION['uid']))
            {
                    header("location: index.php");
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
                                  <strong text-align="center">Success: U Loged in Successfully!</strong>
								 
                                </div>
                                <?php
                                session_destroy();
            	}

            ?>
<nav class="navbar navbar-inverse">

    <div class="container-fluid">

        <!-- Logo -->
        <div class="navbar-header">
            <a hre="#" class="navbar-brand" />BLACKBOARD SYSTEM </a>
        </div>

        <!-- Menu on Left -->
        <div>
            <ul class="nav navbar-nav">
                <li class="active"  > <a href="userhome.php"><span class="glyphicon glyphicon-home"> Home </a> </li>
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search Subjects<span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li > <a href="subjectsearch.php"></a> </li>
				</ul>
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">View Classes<span class="caret"></span></a>
					 <ul class="dropdown-menu">
				<li > <a href="classes.php"></a> </li>
				</ul>
				<li> <a href="grades.php"> View Grades </a> </li>
				<li> <a href="assaignments.php"> View Assaignments </a> </li>
				
				<li > <a href="display.php"> Display Grades</a> </li>
				
				
			

            </ul>


            <!-- Menu on the right -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $uid ; ?> <span class="caret"></span></a>
					
                    <ul class="dropdown-menu">
					<li> <a href="stdinfo.php"> Student Information</a> </li>
                        <li><a href="php/index.php">Log-Out</a></li>

                    </ul>
                </li>

            </ul>


        </div>

    </div>

</nav>


<div class="container-fluid" style="background-color:WHITE>

    <div class="row" >

        <div class="col-xs-2" >

        </div>

        <div class="col-xs-18" style="background-color:WHITE">
            
            

            <div class="jumbotron">
                <h1 align ="center" class="text-success">BLACKBOARD SYSTEM</h1>
                <p></P>

            <br/><br/>
            <h3 align="center" class="text-success"><?php echo $update_msg ; ?></h3>

            

        </div>

        <div class="col-xs-2" >

        </div>

    </div>

</div>
<body style="background:url(https://images5.alphacoders.com/437/437927.jpg)"></body>

</body>

=======

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
                                  <strong text-align="center">Success: U Loged in Successfully!</strong>
								 
                                </div>
                                <?php
                                session_destroy();
            	}

            ?>
<nav class="navbar navbar-inverse">

    <div class="container-fluid">

        <!-- Logo -->
        <div class="navbar-header">
            <a hre="#" class="navbar-brand" /> BLACKBOARD SYSTEM </a>
        </div>

        <!-- Menu on Left -->
        <div>
            <ul class="nav navbar-nav">
                <li class="active"  > <a href="userhome.php"> Home </a> </li>
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search Subjects<span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li > <a href="subjectsearch.php"></a> </li>
				</ul>
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">View Classes<span class="caret"></span></a>
					 <ul class="dropdown-menu">
				<li > <a href="classes.php"></a> </li>
				</ul>
				<li> <a href="grades.php"> View Grades </a> </li>
				<li> <a href="assaignments.php"> View Assaignments </a> </li>
				
				<li > <a href="display.php"> Display Grades</a> </li>
				
				
			

            </ul>


            <!-- Menu on the right -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $uid ; ?> <span class="caret"></span></a>
					
                    <ul class="dropdown-menu">
					<li> <a href="stdinfo.php"> Student Information</a> </li>
                        <li><a href="php/index.php">Log-Out</a></li>

                    </ul>
                </li>

            </ul>


        </div>

    </div>

</nav>


<div class="container-fluid" style="background-color:WHITE>

    <div class="row" >

        <div class="col-xs-2" >

        </div>

        <div class="col-xs-18" style="background-color:WHITE">
            
            

            <div class="jumbotron">
                <h1 align ="center" class="text-success">BLACKBOARD SYSTEM</h1>
                <p></P>

            <br/><br/>
            <h3 align="center" class="text-success"><?php echo $update_msg ; ?></h3>

            

        </div>

        <div class="col-xs-2" >

        </div>

    </div>

</div>


</body>

>>>>>>> 588748919bbca0a2bfc7a8b88b0ffeb13fd4c27e
</html>