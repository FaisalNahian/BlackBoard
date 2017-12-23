<?php
    session_start();
    $update_msg="";
    if(!isset($_SESSION['uid']))
            {
                   
                    header("location:index.php");
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

    <title> BLACKBOARD SYSTEM</title>
</head>

<body>

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
            <a href="#" class="navbar-brand" /> BLACKBOARD SYSTEM </a>
        </div>

        <!-- Menu on Left -->
        <div>
            <ul class="nav navbar-nav">
                <li class="active"  > <a href="home.php"> Home </a> </li>
               </ul>


            <!-- Menu on the right -->
            <ul class="nav navbar-nav navbar-right">
               <li class="dropdown">
               
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $uid ; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="php/logout.php">Log-Out <span class="glyphicon glyphicon-off"></a></li>

                    </ul>
                </li>

            </ul>


        </div>

    </div>

</nav>
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
                    <div id="collapseTwo" class="panel-collapse collapse">
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
                    <div id="collapseThree" class="panel-collapse collapse">
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
               <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-target-id="7" data-parent="#accordion" href="#collapseFoure">Helpline Assistance</a>
                        </h4>
                    </div>
                    <div id="collapseFoure" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                             <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>Team Support</a></li>
                                    </td></tr>
                                    <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>Get Product Information</a></li>
                                    </td></tr>
                                    <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>Call-888-91-00010 Student Federal Support</a></li>
                                    </td></tr>
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


<body style="background:url(http://www.anishdua.com/wp-content/uploads/2016/07/Light-Grey-Background-Hd-5-1.jpg)"></body>
 
 <link href="bootstrap/css/bootstrap1.css" rel="stylesheet">


<!--footer-->
<footer class="footer1">
<div class="container">

<div class="row"><!-- row -->
        
                <div class="col-lg-3 col-md-3"><!-- widgets column center -->
                
                   
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                            <li class="widget-container widget_recent_news"><!-- widgets list -->
                    
                                <h1 class="title-widget">Contact Detail </h1>
                                
                                <div class="footerp"> 
                                
                                <h2 class="title-median">BLACKBOARD Pvt. Ltd.</h2>
                                <p><b>Email id:</b> <a href="mailto:info@webenlance.com">info@blackboard.com</a></p>
                                <p><b>Helpline Numbers </b>

    <b style="color:#ffc106;">(8AM to 5PM):</b>  800-999-8888, 811-991-7878  </p>
    
    <p><b>Corp Office / Postal Address</b></p>
    <p><b>Phone Numbers : </b>7042827160, </p>
    <p> 011-27568832</p>
                                </div>
                                
                                <div class="social-icons">
                                
                                    <ul class="nomargin">
                                    
                <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
                <a href="https://twitter.com/bootsnipp"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
                <a href="https://plus.google.com/+Bootsnipp-page"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
                <a href="mailto:bootsnipp@gmail.com"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>
                                    
                                    </ul>
                                </div>
                            </li>
                          </ul>
                       </div>
                </div>
</div>
</footer>
<!--header-->

<div class="footer-bottom">

    <div class="container">

        <div class="row">

            <div class="col-xs-30 col-sm-10 col-md-10 col-lg-10">

                <div class="copyright">

                    © 1984-2018, Blackboard, All rights reserved

                </div>

            </div>

            <div class="col-xs-30 col-sm-10 col-md-10 col-lg-10">

                <div class="design">

                     

                </div>

            </div>

        </div>

    </div>

</div>

<body style="background:url(http://www.anishdua.com/wp-content/uploads/2016/07/Light-Grey-Background-Hd-5-1.jpg)"></body>
</body>

</html>