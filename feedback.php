<?php
		include("db.php");
		if(isset($_POST["send"])) {
			$aa = $_POST["a1"];
			$bb = $_POST["a2"];
			$cc = $_POST["a3"];
			$send = "INSERT INTO feedback (uname,uemail,msg) VALUES ('$aa','$bb','$cc')";
			$result = mysql_query($send);
					if(!$result) {
						echo"Failed!";
					}
		}
		
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
	<link href="css/feedback.css" rel="stylesheet">
		<style type="text/css">
	.dropdown:hover>.dropdown-menu {
	display: block;
	}
	</style>
</head>
<body>
<header data-spy="scroll">
<nav class="navbar fixed-top navber" id="mainNav" style="font-family:Gill Sans MT">
      <div class="">
        <!--<a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="img" src="img/1.png" width="180px" height="60px"></a>-->
          <a href="#" data-activates="slide-out" class="button-collapse text-white"><i class="fa fa-bars" aria-hidden="true"></i></a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
				
        </div>
      </div>
    </nav>
		
  <!-- Full Page Intro -->
  <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/89.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-indigo-strong d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
	  <br><br><br>
        <!--Grid row-->
        <div class="row pt-lg-5 mt-lg-5">
          <!--Grid column-->
          <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left animated wow fadeInLeft" data-wow-delay="0.3s">
            <h4 class="display-3 font-weight-bold">STUDENT FEEDBACK</h4>
            <hr class="hr-light">
            <h6 class="mb-3">If you find any drawback of this website or any difficulty regarding any subject or details of the same, do write us we will look forward to it and resolve it. </h6>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">
            <!--Form-->
            <div class="card animated wow fadeInRight" data-wow-delay="0.3s">
              <div class="card-body z-depth-2">
                <!--Header-->
                <div class="text-center">
                  <h3 class="dark-grey-text">
                    <strong>Write to us:</strong>
                  </h3>
                  <hr>
                </div>
                <!--Body--><form method="post">
                <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i>
                  
                  <label for="form3">Your name</label>
				  <input type="text" id="form3" class="form-control validate" name="a1" required>
                </div>
                <div class="md-form">
                  <i class="fa fa-envelope prefix grey-text"></i>
                  <input type="email" pattern="[^ @]*@[^ @]*" id="form2" class="form-control validate" name="a2" required>
                  <label for="form2">Your email</label>
                </div>
                <!--Textarea with icon prefix-->
                <div class="md-form">
                  <i class="fa fa-pencil prefix grey-text"></i>
                  <textarea type="text" id="form8" class="md-textarea form-control validate" rows="3" name="a3"></textarea>
                  <label for="form8" >Your message</label>
                </div>
                <div class="text-center mt-3">
                  <button class="btn btn-indigo" name="send">Send</button></form>
                </div>
              </div>
            </div>
            <!--/.Form-->
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav side-nav-dark">
<ul class="custom-scrollbar">
    <!-- Logo -->
    <li>
        <div class="logo-wrapper waves-light">
            <a href="#"><img src="img/logo.png" class="img-fluid flex-center"></a>
        </div>
    </li>
    <!--/. Logo -->
    <!--Social-->
    <li>
        <ul class="social">
            <li><a href="https://www.facebook.com/" class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
            <li><a href="https://in.pinterest.com/" class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
            <li><a href="https://plus.google.com/" class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
            <li><a href="https://twitter.com/login/" class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
        </ul>
    </li>
    <!--/Social-->
    <!-- Side navigation links -->
    <li>
        <ul class="collapsible collapsible-accordion">
			<li><a class="collapsible-header waves-effect arrow-r" href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-hand-pointer-o"></i>Exam Details<i class="fa fa-angle-down rotate-icon"></i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="subjects.html" class="waves-effect">Subjects</a>
                        </li>
                        <li><a href="instruction.html" class="waves-effect">Instruction Page</a>
                        </li>
												<li><a href="books.html" class="waves-effect">Book Details</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-eye"></i> History<i class="fa fa-angle-down rotate-icon"></i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="ourTeam.html" class="waves-effect">Our Team</a>
                        </li>
                        <li><a href="testimonials.html" class="waves-effect">Testimonials</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope-o"></i> Feedback<i class="fa fa-angle-down rotate-icon"></i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="feedback.php" class="waves-effect">Student Feedback</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <!--/. Side navigation links -->
</ul>
</div>
<!--/. Sidebar navigation -->  
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
		// SideNav Button Initialization
		$(".button-collapse").sideNav();
		// SideNav Scrollbar Initialization
		var sideNavScrollbar = document.querySelector('.custom-scrollbar');
		Ps.initialize(sideNavScrollbar);
		</script>
	</header>
</body>
</html>
