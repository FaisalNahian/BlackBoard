<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/rStyle.css" rel="stylesheet">

<nav class="navbar navbar-inverse">

    <div class="container-fluid">

        <!-- Logo -->
      <!-- // <div class="navbar-header" >
        //    <a hre="#" class="navbar-brand"/> BLACKBOARD </a>
        </div>
-->
        <!-- Menu on Left -->
        <div>
            <ul class="nav navbar-nav">
                <li class="active"  > <a href="home.php"> Home </a> </li>
                <li  > <a href="create.php"> Upload Assignment </a> </li>

                <li > <a href="delete.php"> Delete Assignment </a> </li>
                <li > <a href="adminsearch.php"> View My Classes </a> </li>
				<li > <a href="adduser.php"> Add User</a> </li>
				<li > <a href="adminreserve.php"> View Registered Classes</a> </li>
				<li > <a href="adminborrow.php"> View Registered Students</a> </li>
				
				<li > <a href="admindisplay.php"> Display All Students</a> </li>
				<li > <a href="adminassignments.php"> Display All Assignments</a> </li>
				<!--
				<ul class="nav navbar-nav navbar-left">
				<li class="dropdown">
				
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> More Options <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="freqborrower.php">Recently Registered Classes</a></li>
						<li><a href="freqborrowedbook.php">Recently Updated Assignments</a></li>
						<li><a href="freqborrowerb.php">Recently Graded Assignments</a></li>
						
						</ul>

                    </ul>
                    
                    -->
                </li>
				
				

            </ul>


            <!-- Menu on the right -->
            <ul class="nav navbar-nav navbar-right">
               <li class="dropdown">
			   
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $uid ; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="php/logout.php">Log-Out</a></li>

                    </ul>
                </li>

            </ul>


        </div>

    </div>

</nav>
