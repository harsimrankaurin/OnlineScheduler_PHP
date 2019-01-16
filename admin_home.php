<?php
include("db.php");
session_start();
$Uemail = $_SESSION['email_tmp'];

$sdata = "SELECT * FROM admin WHERE aemail='$Uemail'";
$gdata = mysql_query($sdata);
$row = mysql_fetch_assoc($gdata);
$fname = $row["aid"];
$lname = $row["aname"];
$email = $row["aemail"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Online Examination System</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
	<style type="text/css">
	.dropdown:hover>.dropdown-menu {
	display: block;
	}
	</style>
	<style type="text/css">

      html,
      body,
      header,
      .carousel {
        height: 70vh;
      }

      @media (max-width: 740px) {
        html,
        body,
        header,
        .carousel {
          height: 100vh;
        }
      }

      @media (min-width: 800px) and (max-width: 850px) {
        html,
        body,
        header,
        .carousel {
          height: 100vh;
        }
      }

      @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #929FBA!important;
              }
          }
    </style>
</head>
	<!-- Social Share Kit CSS -->
	<link rel="stylesheet" href="css/social-share-kit.css" type="text/css">
</head>

<body style="padding-right:0px !important;background-image: url(http://www.gotechnologix.com/wp-content/uploads/2016/05/solid-color-backgrounds-wallpaper-2.jpg);">

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg h6 text-white sticky-top scrolling-navbar " id="mainNav" style="font-family:Gill Sans MT">
      <div class="container" style="align: center">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="img" src="img/logo.png" width="250px" height="60px"></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
		  <li class="nav-item dropdown" style="margin: 0 0 0 30px;">
                <a class="nav-link" href="index.php" id="navbarDropdownMenuLink" style="color: white">Sign Out &nbsp;<i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </li>			
          </ul>
        </div>
      </div>
    </nav>
<!--/.Navbar-->
<!-- Content -->    
<!--Jumbotron-->
<div class="text-center " style="align:center">
		
    <!--Title-->
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	
	<h1 class="card-title h1-responsive font-bold mt-1"><strong>Welcome, <?php echo $fname;?> <?php echo $lname; ?>	to Online Scheduler</strong></h1>
    <!--Subtitle-->
    <p class="pt-2 font-bold indigo-text"><strong><?php echo $email; ?> </strong></p>

    <!--Text-->

    <hr class="my-4 pb-2">
    <a href="exam_uploading.html" class="btn peach-gradient btn-rounded"><strong>Upload Exam <i class="fa fa-diamond ml-1"></i><strong></a>
	<a href="results.php" class="btn blue-gradient btn-rounded"><strong>Records &nbsp;<i class="fa fa-graduation-cap" aria-hidden="true"></i><strong></a>
	
	

</div>
<!--Jumbotron-->
<!--./Content -->

                      
    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script src="js/slider.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
		<script type="text/javascript">
	$(function() {
    $('marquee').mouseover(function() {
        $(this).attr('scrollamount',0);
    }).mouseout(function() {
         $(this).attr('scrollamount',5);
    });
});
</script>
</body>

</html>
