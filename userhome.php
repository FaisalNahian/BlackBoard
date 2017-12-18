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
<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5JkX0Ls3oJ4J3ShdCV31ioYp0B1sryTp";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
	<link herf="bootstrap/css/style.css" rel="stylesheet">
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
            <a hre="#" class="navbar-brand" />BLACKBOARD</a>
        </div>

        <!-- Menu on Left -->
        <div>
            <ul class="nav navbar-nav">
                <li class="active"  > <a href="userhome.php">HOME <span class="glyphicon glyphicon-home"></a> </li>
				</ul>


            <!-- Menu on the right -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $uid ; ?> <span class="caret"></span></a>
					
                    <ul class="dropdown-menu">
					<li><a href="php/index.php">Log-Out <span class="glyphicon glyphicon-off"></span></a></li>

                    </ul>
                </li>

            </ul>


        </div>

    </div>
</nav>

</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default nav nav-pills nav-stacked ">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"  data-target-id="1" data-parent="#accordion" href="#collapseOne">Search Subjects</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in ">
                        <div class="panel-body">
                        
                            <table class="table">
                                <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="1"><i></i>Science</a></li>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="2"><i></i>English</a></li>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="3"><i></i>Math</a></li>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="4"><i></i>Spanish</a></li>
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
                                        <li class="active"><a href="#" data-target-id="6"><i></i>Tasks</a></li>
                                    </td>
                                </tr>
								<tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>My Grades</a></li>
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
                                    <td>
                                        <li class="active"><a href="#" data-target-id="5"><i></i>Personal Information</a></li>
                                    </td></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-target-id="6" data-parent="#accordion" href="#collapseThree">My Courses</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
							<tr>
                                    <td>
                                        <li class="active"><a href="course_db.php" data-target-id="5"><i></i>Database Systems</a></li>
										
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <li class="active"><a href="#" data-target-id="6"><i></i>Computer Architecture-|</a></li>
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
                                        <li class="active"><a href="#" data-target-id="5"><i></i>Computer Architecture-||</a></li>
                                    </td></tr>
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
            
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Useful links</h1>
                                
                                <ul>
                                	<li><a  href="#"><i class="fa fa-angle-double-right"></i> About Us</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i> Success Stories</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i> PG Courses</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i> Achiever's Batch</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Regular Batch</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Test & Discussion</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Fast Track T & D</a></li>
                                </ul>
                    
							</li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
            
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Useful links</h1>
                                
                                <ul>
 									<li><a  href="#"><i class="fa fa-angle-double-right"></i>  Test Series Schedule</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Postal Coaching</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  PG Dr. Bhatia Books</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  UG Courses</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Satellite Education</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Study Centres</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  State P.G. Mocks</a></li>
                                    <li><a  href="#" target="_blank"><i class="fa fa-angle-double-right"></i> Results</a></li>
                                    
                                </ul>
                    
							</li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
            
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Useful links</h1>
                                
                                <ul>


                <li><a href="#"><i class="fa fa-angle-double-right"></i> Enquiry Form</a></li>
 				<li><a href="#"><i class="fa fa-angle-double-right"></i> Online Test Series</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i> Grand Tests Series</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i> Subject Wise Test Series</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i> Smart Book</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i> Test Centres</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i>  Admission Form</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i>  Computer Live Test</a></li>

                                </ul>
                    
							</li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
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
</body>

</html>