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
    <link herf="bootstrap/css/style.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap1.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/jquery-1.12.2.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Users Dashboard</title>
</head>
<body>

<?php
                if(isset($_SESSION['success']))
                {
                                ?> <div class="alert alert-success">
                                  <a href="#" class="close" data-dismiss="alert" aria-label="close" hide="true" id="xxx">&times;</a>
                                  <strong text-align="center">Success: You logged in successfully!</strong>
                                 
                                </div>
                                <?php
                                session_destroy();
                }
            ?>

<nav class="navbar navbar-inverse">
    <div class="container">
        <!-- Logo -->
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand"/>Blackboard</a>
            </div>  
        <!-- Menu on Left -->
    <div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="userhome.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="userhome.php"><span class="glyphicon glyphicon-book"></span> Courses</a></li>
            </ul>

            <!-- Menu on the right -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $uid ; ?> <span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="update.php"><span class="glyphicon glyphicon-edit"></span> Edit Profile</a></li>
                        <li><a href="php/index.php"><span class="glyphicon glyphicon-off"></span> Log out</a></li>
                    </ul>
                </li>
            </ul>
</nav>

<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            

            <div class="panel-group" id="accordion">
            
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"  data-target-id="5" data-parent="#accordion" href="#collapseTwo">Tools</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr><td>
                                    <li class="active"><a href="#" data-target-id="5"><i></i>Announcement</a></li>
                                </td></tr>
                                <tr><td>
                                    <li class="active"><a href="#" data-target-id="6"><i></i>Tasks</a></li>
                                </td></tr>
                                <tr><td>
                                    <li class="active"><a href="#" data-target-id="5"><i></i>My Grades</a></li>
                                </td></tr>
                                <tr><td>
                                    <li class="active"><a href="#" data-target-id="5"><i></i>Send Email</a></li>
                                </td></tr>
                                <tr><td>
                                    <li class="active"><a href="#" data-target-id="5"><i></i>Calender</a></li>
                                </td></tr>
                                <tr><td>
                                    <li class="active"><a href="#" data-target-id="5"><i></i>User Directory</a></li>
                                </td></tr>
                                <tr><td>
                                    <li class="active"><a href="#" data-target-id="5"><i></i>Personal Information</a></li>
                                </td></tr>
                            </table>
                        </div>
                    </div>
                
                </div> <!-- end of panel default -->
                
               <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-target-id="7" data-parent="#accordion" href="#collapseFoure">Helpline Assistance</a>
                        </h4>
                    </div>
                    <div id="collapseFoure" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                            <tr><td>
                                <li class="active"><a href="#" data-target-id="5"><i></i>Team Support</a></li>
                            </td></tr>
                            <tr><td>
                                <li class="active"><a href="#" data-target-id="5"><i></i>Get Product Information</a></li>
                            </td></tr>
                            <tr><td>
                                <li class="active"><a href="#" data-target-id="5"><i></i>Student Federal Support</a></li>
                            </td></tr>
                            </table>
                        </div>
                    </div>
                </div><!-- end of panel default -->
            </div> <!-- end of accordion -->
</div> <!-- end of column -->
        

        <div class="col-sm-6 col-md-6 well " id="1">
            <div class="well">
                <h3>MY Announcement</h3>
                <p>No Institution Announcemens have been posted in the last 7 days.</p> 
                <p>No Courses or Organizational announcemens have been posted in last 7 days.</p>
                <a href="#1" class="yndzuxt" data-toggle="modal" data-target="#lightbox2"></a>
                <p style="text-align: right;">More Announcement....</p></br>                
            </div>

            <div class="well">
                <h3>No Demand Help</h3>
                <h4>Help for students</h4>
                <p>Visit Blackboard Help for students</p>
                <p>Learn about the Blackboard app</p>
                <p>Watch students helpful Blackboard guide videos</p>
                
                <h4>Help for Instructors</h4>               
                <p>Visit Blackboard Help for instructors</p>
                <p>Explore online teaching stratergies and best practices</p>
                <p>Learn about Blackboard instructor app</p>
                <p>Watch instructors helpful Blackboard guide videos</p>
                </p>
                <a href="#1" class="yndzuxt" data-toggle="modal" data-target="#lightbox2"></a>
                <br></br>                           
            </div>
        </div>

           
<div class="col-sm-3 col-md-3 sidebar-offcanvas" id="sidebar">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-target-id="6" data-parent="#accordion" href="#collapseThree">My Courses</a>
                        </h4>
                    </div>

                    <div id="collapseThree" class="panel-collapse">
                        <div class="panel-body">
                            <table class="table">
                            <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>Database Systems</a></li>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="6"><i></i>Computer Architecture-I</a></li>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>Computer Networks</a></li>
                                    </td></tr>
                                    <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>Software Engineering</a></li>
                                    </td></tr>
                                    <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>Technical English Writing</a></li>
                                    </td></tr>
                                    <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>Programming Languages</a></li>
                                    </td></tr>
                                    <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>Computer Architecture-II</a></li>
                                    </td></tr>
                            </table>
                        </div>
                    </div>
        </div><!-- end of panel default -->
    </div><!-- end of accordion -->
</div><!-- end of panel column -->


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

    </div><!-- end of body row -->
</div><!-- end of body container -->

<!--<body style="background:url(http://www.anishdua.com/wp-content/uploads/2016/07/Light-Grey-Background-Hd-5-1.jpg)"></body>-->
 
    <div class="container">
      <hr>
        <!-- footer -->
        <footer class="footer">
            <p><a href="#">Password Recovery</a> &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            <p>Blackboard Project for NYIT CSCI 760 Database Course: Made by Faisal Nahian, Robert Maldonado and Siddharth Mogulla. Powered by <a href="http://getbootstrap.com">Bootstrap</a> and <a href="http://heyfaisal.com">heyfaisal.com</a>.</p>
        </footer> <!-- end of footer -->
    </div> <!-- end of footer container -->

    </body>
</html>