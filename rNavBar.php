<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/rStyle.css" rel="stylesheet">

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Logo -->
        <div class="navbar-header" >
            <a hre="home.php" class="navbar-brand"/>BLACKBOARD </a>
        </div>
        <!-- Menu on Left -->
        <div>
            <ul class="nav navbar-nav">
                <li class="active"> <a href="home.php"> Home</a></li>
                <li><a href="rViewClass.php"> View My Classes</a></li>
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
