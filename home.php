<?php
include("db.php");
session_start();
$Uemail = $_SESSION['email_tmp'];

$sdata = "SELECT * FROM users WHERE Uemail='$Uemail'";
$gdata = mysql_query($sdata);
$row = mysql_fetch_assoc($gdata);
$fname = $row["Uid"];
$lname = $row["Uname"];
$email = $row["Uemail"];
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

<body style="padding-right:0px !important;background-image: url(https://barbarashdwallpapers.com/wp-content/uploads/2015/07/Light-pink-wallpaper-with-flowers.jpg);">

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg h6 text-white sticky-top scrolling-navbar" id="mainNav" style="font-family:Gill Sans MT">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="img" src="img/logo.png" width="250px" height="60px"></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown" style="margin: 0 0 0 30px;">
                <a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Exam Details</a>
                <div class="dropdown-menu dropdown-primary animated bounceIn" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="subjects.html">Subjects</a>
                    <a class="dropdown-item" href="instruction.html">Instruction Page</a>
					<a class="dropdown-item" href="books.html">Book Details</a>
                </div>
            </li>

            <li class="nav-item dropdown" style="margin: 0 0 0 30px;">
                <a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">History</a>
                <div class="dropdown-menu dropdown-primary animated bounceIn" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="ourTeam.html">Our Team</a>
                    <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                </div>
            </li>
			
			<li class="nav-item dropdown" style="margin: 0 0 0 30px;">
                <a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Feedback</a>
                <div class="dropdown-menu dropdown-primary animated bounceIn" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="feedback.php">Student Feedback</a>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!--/.Navbar-->
<!-- Content -->    
<!--Jumbotron-->
<div class="text-center ">

    <!--Title-->
    <h1 class="card-title h1-responsive font-bold mt-3"><strong>Welcome, <?php echo $fname;?> <?php echo $lname; ?>	to E-Exam Generator</strong></h1>
    <!--Subtitle-->
    <p class="pt-2 font-bold indigo-text"><strong><?php echo $email; ?> </strong></p>

    <!--Text-->
    <div class="d-flex justify-content-center">
        <p class="card-text my-3" style="max-width: 43rem;"><b> This Online Scheduler heartly welcome's you! hope you find our service convinent...Begin your test! 
        </b></p>
    </div>

    <hr class="my-4 pb-2">
    <a href="register.php" class="btn peach-gradient btn-rounded"><strong>Begin Exam <i class="fa fa-diamond ml-1"></i><strong></a>
    <a href="results.php" class="btn purple-gradient btn-rounded"><strong>Test Results <i class="fa fa-download ml-1"></i><strong></a>
	<a href="index.php" class="btn blue-gradient btn-rounded"><strong>Sign Out &nbsp;<i class="fa fa-sign-out" aria-hidden="true"></i><strong></a>
	
	

</div>
<!--Jumbotron-->
<!--./Content -->
<!--Footer-->
<footer class="page-footer font-small stylish-color-dark pt-4 mt-4">

    <!--Footer Links-->
    <div class="container text-center text-md-left">
        <div class="row">

            <!--First column-->
            <div class="col-md-4">
				<img class="img" src="img/logo.png" width="250px" height="60px"><br><hr>
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Online examination Portal</h5>
                <p>This portal provides expertised certficiation courses for various programming languages in order to increase knowledge level.</p>
            </div>
            <!--/.First column-->

            <hr class="clearfix w-100 d-md-none">

            <hr class="clearfix w-100 d-md-none">

            <!--Fourth column-->
            <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="subjects.html">Subjects</a><br><br>
                    </li>
                    <li>
                        <a href="testimonials.html">Testimonials</a><br><br>
                    </li>
                    <li>
                        <a href="instruction.html">Instructions</a><br><br>
                    </li>
                    <li>
                        <a href="ourteam.html">Our Team</a><br><br>
                    </li>
					<li>
                        <a href="books.html">Book Details</a><br><br>
                    </li>
                </ul>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Call to action-->
    <div class="text-center py-3">
        <ul class="list-unstyled list-inline mb-0">
               <li class="list-inline-item">
				<a href="index.php" class="btn btn-danger btn-rounded" >Sign Out &nbsp;<i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div>
    <!--/.Call to action-->

    <hr>

    <!--Social buttons-->
    <div class="text-center footer-copyright py-3">
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-fb mx-1">
                    <i class="fa fa-facebook"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-tw mx-1">
                    <i class="fa fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-gplus mx-1">
                    <i class="fa fa-google-plus"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-li mx-1">
                    <i class="fa fa-linkedin"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-dribbble mx-1">
                    <i class="fa fa-dribbble"> </i>
                </a>
            </li>
        </ul>
    </div>
    <!--/.Social buttons-->

</footer>
<!--/.Footer-->
                      
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
