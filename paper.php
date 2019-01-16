<?php
include("db.php");
if(isset($_POST["send"])) {
	$bb = $_POST["a12"];
	$cc = $_POST["a13"];
	$dd = $_POST["a14"];
	$ee = $_POST["a15"];
	$ff = $_POST["a16"];
	$gg = $_POST["a17"];
	$hh = $_POST["sub"];
	$send = "INSERT INTO paper (txt,ch1,ch2,ch3,ch4,cans,subject) VALUES ('$bb','$cc','$dd','$ee','$ff','$gg','$hh')";
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
    <title>Subjects</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
	<link href="css/form.css" rel="stylesheet">
		<style type="text/css">
	.dropdown:hover>.dropdown-menu {
	display: block;
	}
	</style>
<body >
<nav class="navbar fixed-top navber" id="mainNav" style="font-family:Gill Sans MT">
      <div class="">
        <!--<a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="img" src="img/1.png" width="180px" height="60px"></a>-->
          <a href="#" data-activates="slide-out" class="button-collapse text-white"><i class="fa fa-bars" aria-hidden="true"></i></a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
				
        </div>
      </div>
    </nav>
	
<!-- Card -->
<div class="card card-image mb-3" style="background-image: url(https://www.freegreatpicture.com/files/146/25451-colorful-high-resolution-background.jpg);">
    <!-- Content -->
    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4" style="font-family:Gill Sans MT">
        <div class="container">
            <img class="img" src="img/logo.png" width="250px" height="60px"><br><hr>
			<h1>UPLOAD EXAM PAPER</h1>
        </div>
    </div>
    <!-- Content -->
</div>
<!--Form-->
		<div class="container">
            <div class="card animated wow fadeInRight" data-wow-delay="0.3s">
              <div class="card-body z-depth-2">
                <!--Header-->
                <div class="text-center">
                  <h3 class="dark-grey-text">
                    <strong>Add A Question Here</strong>
                  </h3>
                  <hr>
                </div>
                <!--Body--><form method="post">
                <!--Textarea with icon prefix-->
				<div class="container md-form grey-text">
				<table align="center">
				<hr>
				<strong> SELECT YOUR SUBJECT:</strong>
				<tr>
					<td><div class="md-form custom-control custom-radio">
							<input type="radio" class="custom-control-input" id="1" name="sub" value="php">
							<label class="custom-control-label" for="1">PHP</label>
					</td></div>
					<td><div class="md-form custom-control custom-radio">
							<input type="radio" class="custom-control-input" id="2" name="sub" value="iot">
							<label class="custom-control-label" for="2">IOT</label>
					</td></div>
					<td><div class="md-form custom-control custom-radio">
							<input type="radio" class="custom-control-input" id="3" name="sub" value="java">
							<label class="custom-control-label" for="3">JAVA</label>
					</td></div>
					<td><div class="md-form custom-control custom-radio">
							<input type="radio" class="custom-control-input" id="4" name="sub" value="cpp">
							<label class="custom-control-label" for="4">C++</label>
					</td></div>
					<td><div class="md-form custom-control custom-radio">
							<input type="radio" class="custom-control-input" id="5" name="sub" value="python">
							<label class="custom-control-label" for="5">PYTHON</label>
					</td></div>
					<td><div class="md-form custom-control custom-radio">
							<input type="radio" class="custom-control-input" id="6" name="sub" value="sql">
							<label class="custom-control-label" for="6">ORACLE SQL</label>
					</td></div>
					</tr>
					</table>
				</div>
				<!--/Textarea with icon prefix-->
                <div class="md-form">
					  <i class="fa fa-question prefix grey-text"></i>
					  <textarea type="text" id="form8" class="md-textarea form-control validate" name="a12"></textarea>
					  <label for="form8" >Question Text:</label>
                </div>
				<div class="md-form">
					   <i class="fa fa-check prefix grey-text"></i>
					  <input type="text" id="form8" class="md-textarea form-control validate" name="a13"></input>
					  <label for="form8" >Choice #1:</label>
                </div>
                <div class="md-form">
					   <i class="fa fa-check prefix grey-text"></i>
					  <input type="text" id="form8" class="md-textarea form-control validate" name="a14"></input>
					  <label for="form8" >Choice #2:</label>
                </div>
                <div class="md-form">
					  <i class="fa fa-check prefix grey-text"></i>
					  <input type="text" id="form8" class="md-textarea form-control validate" name="a15"></input>
					  <label for="form8" >Choice #3:</label>
                </div>				
				<div class="md-form">
					   <i class="fa fa-check prefix grey-text"></i>
					  <input type="text" id="form8" class="md-textarea form-control validate" name="a16"></input>
					  <label for="form8" >Choice #4:</label>
                </div>
				<div class="md-form">
					   <i class="fa fa-thumbs-up prefix grey-text"></i>
					  <input type="number" id="form8" class="form-control validate" name="a17"></input>
					  					  <label for="form8" >Correct Answer</label>
                </div>
				</div>
                <div class="text-center mt-3">
						<button class="btn btn-indigo" name="send">Submit</button></form>
                </div>
              </div>
            </div>
            <!--/.Form-->
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
				<li><a class="collapsible-header waves-effect arrow-r" href="admin_home.php"><i class="fa fa-home" aria-hidden="true"></i>Back</a>
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
