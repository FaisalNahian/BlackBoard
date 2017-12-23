<?php
    session_start();
    $update_msg="";
    if(!isset($_SESSION['uid']))
            {
				header("location:index.php");
            }
    if(isset($_SESSION['update_success']))
    {
        $update_msg="Assignment Successfully Updated!";
        unset($_SESSION['update_success']);
    }
    

    $uid = $_SESSION["uid"];
?>

<html>

<head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="bootstrap/css/bootstrap1.css" rel="stylesheet">
    <link href="bootstrap/css/rStyle.css" rel="stylesheet">
    <script src="bootstrap/js/jquery-1.12.2.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <title>BLACKBOARD - Instructors Home</title>
</head>

<?php

				if(isset($_SESSION['success']))
            	{
            					?> <div class="alert alert-success">
                                  <a href="#" class="close" data-dismiss="alert" aria-label="close" hide="true" id="xxx">&times;</a>
                                  <strong text-align="center">Success: User Added Successfully !</strong>
                                </div>
                                <?php
                                session_destroy();
            	}

            ?>
<nav class="navbar navbar-inverse">

    <div class="container-fluid">

        <!-- Logo -->
        <div class="navbar-header" >
            <a hre="#" class="navbar-brand"/>BLACKBOARD </a>
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

    </div>

</nav>

<body>
<!--<div class="container-fluid" style="background-color:WHITE" >

    <div class="row" >

        <div class="col-xs-2" >

        </div>

        <div class="col-xs-18" style="background-color:WHITE ">
            
            

            <div class="jumbotron">
                <h1 align ="center"> BLACKBOARD</h1>
                <p></P>

            <br/><br/>
            <h3 align="center" class="text-success"><?php echo $update_msg ; ?></h3>

            

            </div>  

        </div>

        <div class="col-xs-2" >

        </div>

    </div>

</div>-->


<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default nav nav-pills nav-stacked ">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"  data-target-id="1" data-parent="#accordion" href="#collapseOne">View Classes</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in ">
                        <div class="panel-body">
                        
                            <table class="table">
                                <tr>
                                    <td>
                                        <li class="active"><a href="rViewClass.php" data-target-id="1"><i></i>Classes</a></li>
                                        
                                    </td>
                                </tr>
                         </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"  data-target-id="5" data-parent="#accordion" href="#collapseTwo">Tools</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>Announcement</a></li>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="6"><i></i> My Tasks</a></li>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>Student Grades</a></li>
                                    </td></tr>
                                    <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>Send Email</a></li>
                                    </td></tr>
                                    <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>Calender</a></li>
                                    </td></tr>
                                    <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>User Directory</a></li>
                                    </td></tr>
                                    <tr>
                                    
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-target-id="6" data-parent="#accordion" href="#collapseThree">Registered Students</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse">
                        <div class="panel-body">
                            <table class="table">
                            
                                <tr>
                                    <td>
                                        <li class="active"><a href="admindisplay.php" data-target-id="6"><i></i>View Students enrolled for Fall 2017</a></li>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>View Students enrolled for Spring 2017</a></li>
                                    </td></tr>
                                    <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>View Students enrolled for Fall 2016</a></li>
                                    </td></tr>
                                    <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>View Students enrolled for Spring 2017</a></li>
                                    </td></tr>
                                    <tr>
                                    
                            </table>
                        </div>
                    </div>
                </div>


            </div>
       </div>
        <div class="col-sm-9 col-md-9 well " id="1">
            <div class="well">
                <h3>MY Announcement</h3>
                <p>No Institution Announcemens have been posted in the last 7 days.</p> 
                <p>No Courses or Organisational Announcemens have been posted in last 7 days.</p>
                <a href="#1" class="yndzuxt" data-toggle="modal" data-target="#lightbox2">
                                <p style="text-align: right;">More Announcement....</p></br>
                            </a>
               </div>
               </div>
               
                <div class="col-sm-9 col-md-9 well " id="2">
            <div class="well">
                <h3>Help</h3>
                       
                <h4>Help for Instructors</h4>
                
                <p>Visit Blackboard Help for instructors</p>
                <p>Explore online teaching stratergies and best practices</p>
                <p>Learn about Blackboard instructor app</p>
                <p>Watch instructors helpful Blackboard guide videos</p>
                </p>
                <br><a href="#2" class="yndzuxt" data-toggle="modal" data-target="#lightbox2">
                                </br>
                            </a>
               </div>
               </div>
               
                   
                <script>
                $(document).ready(function()
{
    var navItems = $('.admin-menu li > a');
    var navListItems = $('.admin-menu li');
    var allWells = $('.admin-content');
    var allWellsExceptFirst = $('.admin-content:not(:first)');
    
    allWellsExceptFirst.hide();
    navItems.click(function(e)
    {
        e.preventDefault();
        navListItems.removeClass('active');
        $(this).closest('li').addClass('active');
        
        allWells.hide();
        var target = $(this).attr('data-target-id');
        $('#' + target).show();
    });
});
                
                </script>
 
 <hr>
<!-- footer -->
            <div class="container">

                <div class="footer">
                    <p><a href="recovery.php">Password Recovery</a> &middot; <a href="privacy.php">Privacy</a> &middot; <a href="terms.php">Terms</a></p>
                    <p>Blackboard Project for NYIT CSCI 760 Database Course: Made by Faisal Nahian, Robert Maldonado and Siddharth Mogulla. Powered by <a href="http://getbootstrap.com">Bootstrap</a> and <a href="http://heyfaisal.com">heyfaisal.com</a>.</p>
                </div><!-- end of footer -->
            </div> <!-- end of container -->
<body style="background:url(http://www.anishdua.com/wp-content/uploads/2016/07/Light-Grey-Background-Hd-5-1.jpg)"></body>
</body>
</html>