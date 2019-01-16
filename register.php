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
	
	.jumbotron {
			position: relative;
			overflow: hidden;
			
			}
	.jumbotron video {
			position: absolute;
			z-index: 1;
			top: 0;
			width:100%;
			height:100%;
		  /*  object-fit is not supported on IE  */
		  object-fit: cover;
		  opacity:0.5;
		}
		.jumbotron .container {
		  z-index: 2;
		  position: relative;
		}

    </style>
</head>
	<!-- Social Share Kit CSS -->
	<link rel="stylesheet" href="css/social-share-kit.css" type="text/css">
</head>

<body style="padding-right:0px !important;background-image: url(https://i.ytimg.com/vi/v1SabYdIlZI/maxresdefault.jpg);">

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg h6 text-white sticky-top scrolling-navbar stylish-color-dark" id="mainNav" style="font-family:Gill Sans MT">
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
&nbsp;&nbsp;&nbsp;  
<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid">

<video autoplay muted loop poster="#">    
    <source src="" data-src="//clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" type="video/mp4">
    <source src="" data-src="//clips.vorwaerts-gmbh.de/big_buck_bunny.webm" type="video/webm">
    <source src="" data-src="//clips.vorwaerts-gmbh.de/big_buck_bunny.ogv" type="video/ogg">
</video>
  <!-- Card --><form method="get">
	  <div class="container " >
		
		<h1 class="display-4 card-title h1-responsive font-bold mt-3"> Hello, <?php echo $fname; ?> <?php echo $lname; ?> !</h1>
		<p class="lead">Kindly select your respective programming language for which you want to give the test.</p>
		<p>You can give the test and see the result immediately after the test along with the corrent answers.</p>
	  </div>


	<div class="container" >
		<div class="row" >
			<div class="col-4 card card-cascade wider"  >
				<!-- Card image -->
				<div class="view gradient-card-header peach-gradient">
					<!-- Title -->
					<h2 class="card-header-title mb-3">PHP</h2>
					<!-- Text -->
				</div>
					<!-- Card content -->
				<div class="card-body text-center">
					<!-- Text -->
					<p class="card-text">PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP. PHP code may be embedded into HTML code, or it can be used in combination with various web template systems, web content management systems, and web frameworks.</p>
					<!-- Link --><hr>
					<a href="#!" class="orange-text d-flex flex-row-reverse p-2">
					  <h5 class="waves-effect waves-light"><a href="exam.php?subj=php">Select<i class="fa fa-angle-double-right ml-2"></i></a></h5>
					</a>
				</div>
			</div>
			<div class="col-4 card card-cascade wider">
				<!-- Card image -->
				<div class="view gradient-card-header blue-gradient">
					<!-- Title -->
					<h2 class="card-header-title mb-3">JAVA</h2>
					<!-- Text -->
				</div>
					<!-- Card content -->
				<div class="card-body text-center">
					<!-- Text -->
					<p class="card-text">Java is a general-purpose computer-programming language that is concurrent, class-based, object-oriented, and specifically designed to have as few implementation dependencies as possible. Java applications are typically compiled to bytecode that can run on any Java virtual machine (JVM) regardless of computer architecture.Java is one of the most popular programming languages in use</p>
					<!-- Link --><hr>
					<a href="#!" class="orange-text d-flex flex-row-reverse p-2">
					  <h5 class="waves-effect waves-light"><a href="exam.php?subj=java">Select<i class="fa fa-angle-double-right ml-2"></i></a></h5>
					</a>
				</div>
			</div>
			<div class="col-4 card card-cascade wider" >
				<!-- Card image -->
				<div class="view gradient-card-header purple-gradient">
					<!-- Title -->
					<h2 class="card-header-title mb-3">Oracle SQL</h2>
					<!-- Text -->
				</div>
					<!-- Card content -->
				<div class="card-body text-center">
					<!-- Text -->
					<p class="card-text">Structured Query Language (SQL) is the set of statements with which all programs and users access data in an Oracle database. Application programs and Oracle tools often allow users access to the database without using SQL directly, but these applications in turn must use SQL when executing the user's request. racle SQL provides an easy, elegant, performant architecture for accessing, defining, and maintaining data.</p>
					<!-- Link --><hr>
					<a href="#!" class="orange-text d-flex flex-row-reverse p-2">
					  <h5 class="waves-effect waves-light"><a href="exam.php?subj=sql">Select<i class="fa fa-angle-double-right ml-2"></i></a></h5>
					</a>
				</div>
			</div>
			<div class="col-sm-4 card card-cascade wider"  style="padding-top:20px">
				<!-- Card image -->
				<div class="view gradient-card-header peach-gradient">
					<!-- Title -->
					<h2 class="card-header-title mb-3">Python</h2>
					<!-- Text -->
				</div>
					<!-- Card content -->
				<div class="card-body text-center">
					<!-- Text -->
					<p class="card-text">Python is an easy to learn, powerful programming language. It has efficient high-level data structures and a simple but effective approach to object-oriented programming. Python's elegant syntax and dynamic typing, together with its interpreted nature, make it an ideal language for scripting and rapid application development in many areas on most platforms. It provides constructs that enable clear programming on both small and large scales.</p>
					<!-- Link --><hr>
					<a href="#!" class="orange-text d-flex flex-row-reverse p-2">
					  <h5 class="waves-effect waves-light"><a href="exam.php?subj=python">Select<i class="fa fa-angle-double-right ml-2"></i></a></h5>
					</a>
				</div>
			</div>
			<div class="col-sm-4 card card-cascade wider" style="padding-top:20px">
				<!-- Card image -->
				<div class="view gradient-card-header blue-gradient">
					<!-- Title -->
					<h2 class="card-header-title mb-3">IOT</h2>
					<!-- Text -->
				</div>
					<!-- Card content -->
				<div class="card-body text-center">
					<!-- Text -->
					<p class="card-text">The Internet of Things (IoT) is the network of physical devices, vehicles, home appliances and other items embedded with electronics, software, sensors, actuators, and connectivity which enables these objects to connect and exchange data. Each thing is uniquely identifiable through its embedded computing system but is able to inter-operate within the existing Internet infrastructure. The IoT allows objects to be sensed or controlled remotely across existing network infrastructure.</p>
					<!-- Link --><hr>
					<a href="#!" class="orange-text d-flex flex-row-reverse p-2">
					  <h5 class="waves-effect waves-light"><a href="exam.php?subj=iot">Select<i class="fa fa-angle-double-right ml-2"></i></a></h5>
					</a>
				</div>
			</div>
			<div class="col-sm-4 card card-cascade wider" style="padding-top:20px">
				<!-- Card image -->
				<div class="view gradient-card-header purple-gradient">
					<!-- Title -->
					<h2 class="card-header-title mb-3">C++</h2>
					<!-- Text -->
				</div>
					<!-- Card content -->
				<div class="card-body text-center">
					<!-- Text -->
					<p class="card-text">C++ is a field of computer science that uses statistical techniques to give computer systems the ability to "learn" (e.g., progressively improve performance on a specific task) with data, without being explicitly programmed. Evolved from the study of pattern recognition and computational learning theory in artificial intelligence, machine learning explores the study and construction of algorithms that can learn from and make predictions on data</p>
					<!-- Link --><hr>
					<a href="#!" class="orange-text d-flex flex-row-reverse p-2">
					  <h5 class="waves-effect waves-light"><a href="exam.php?subj=ml">Select<i class="fa fa-angle-double-right ml-2"></i></a></h5>
					</a>
				</div>
			</div>
		
 

		
	</div>
	</div>
<!-- Card --></form>
  <!-- /.container -->
</div>
<!-- /.jumbotron -->
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
                <a href="index.php" class="btn btn-danger btn-rounded">Sign Out &nbsp;<i class="fa fa-sign-out" aria-hidden="true"></i></a>
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
