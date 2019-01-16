<?php
		include("db.php");
	if(isset($_POST["signup_1"])) {
		$o1 = $_POST["up1"];
		$o2 = $_POST["up2"];
		$o3 = $_POST["up3"];
		$o4 = $_POST["up4"];
		$o5 = $_POST["up5"];
		$o6 = $_POST["up6"];
	$signup = "INSERT INTO users (Uid,Uname,Uemail,Lpwd,Gender,Address) VALUES ('$o1','$o2','$o3','$o4','$o5','$o6')";
	if(mysql_query($signup)) {
		$a=1;
	} else {
		$b=1;
	}
	}
	
	if(isset($_POST["login_1"])){  

if(!empty($_POST['in1']) && !empty($_POST['in2'])) {  
    $user=$_POST['in1'];  
    $pass=$_POST['in2'];  
    $signin=mysql_query("SELECT * FROM users WHERE Uemail='".$user."' AND Lpwd='".$pass."'");  
    $numrows=mysql_num_rows($signin);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($signin))  
    {  
    $dbusername=$row['Uemail'];  
    $dbpassword=$row['Lpwd'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {
		// SESSION START
		session_start();
		$_SESSION['email_tmp']=$user;
		header('location: home.php');
    } else {
		$c=1;
    echo "Invalid username or password!";  }  } 
    else {
		$c=1;
    echo "All fields are required!";  
}  
} }  

	if(isset($_POST["signup_9"])) {
		$o1 = $_POST["up11"];
		$o2 = $_POST["up22"];
		$o3 = $_POST["up33"];
		$o4 = $_POST["up44"];
		$o5 = $_POST["up55"];
		$o6 = $_POST["up66"];
	$signup = "INSERT INTO admin (aid,aname,aemail,apsd,agender,aaddress) VALUES ('$o1','$o2','$o3','$o4','$o5','$o6')";
	if(mysql_query($signup)) {
		$a=1;
	} else {
		$b=1;
	}
	}
	
	if(isset($_POST["login_1"])){  

if(!empty($_POST['in11']) && !empty($_POST['in22'])) {  
    $user=$_POST['in11'];  
    $pass=$_POST['in22'];  
    $signin=mysql_query("SELECT * FROM admin WHERE aemail='".$user."' AND apsd='".$pass."'");  
    $numrows=mysql_num_rows($signin);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($signin))  
    {  
    $dbusername=$row['aemail'];  
    $dbpassword=$row['apsd'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {
		// SESSION START
		session_start();
		$_SESSION['email_tmp']=$user;
		header('location: admin_home.php');
    } else {
		$c=1;
    echo "Invalid username or password!";  }  } 
    else {
		$c=1;
    echo "All fields are required!";  
}  
} }  
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
</head>

<body style="padding-right:0px !important;">

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg h6 text-white fixed-top scrolling-navbar" id="mainNav" style="font-family:Gill Sans MT">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="img" src="img/logo.png" width="250px" height="60px"></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown" style="margin: 0 0 0 30px;">
                <a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Login</b></a>
                <div class="dropdown-menu dropdown-primary animated bounceIn" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" data-toggle="modal" data-target="#mss2" >Admin Login</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#mss3">Student Login</a>
                </div>
            </li>
			
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
<!--/.Navigation-->
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
          <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/nature7.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
                  <strong>Welcome to E-Exam Generator</strong>
                </h1>

                <p>
                  <strong>Provides various certification courses online to level up the knowledge in the field of Computer Science</strong>
                </p>

                  <a target="_blank" href="instruction.html" class="btn btn-outline-white btn-lg">Get Started!
                  <i class="fa fa-graduation-cap ml-2"></i>
                </a>
              </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
        <!--/First slide-->

        <!--Second slide-->
        <div class="carousel-item">
          <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
                  <strong>Welcome to E-Exam Generator</strong>
                </h1>

                <p>
                  <strong>Provides various certification courses online to level up the knowledge in the field of Computer Science</strong>
                </p>
                  <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Get Started!
                  <i class="fa fa-graduation-cap ml-2"></i>
                </a>
              </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
        <!--/Second slide-->

        <!--Third slide-->
        <div class="carousel-item">
          <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/47.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
                  <strong>Welcome to E-Exam Generator</strong>
                </h1>

                <p>
                  <strong>Provides various certification courses online to level up the knowledge in the field of Computer Science</strong>
                </p>              
                <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Get Started!
                  <i class="fa fa-graduation-cap ml-2"></i>
                </a>
              </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
        <!--/Third slide-->

      </div>
      <!--/.Slides-->

      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->

    </div>
    <!--/.Carousel Wrapper-->
<hr>
		<!--Card-->
<div class="row">
<div class="col-1">&nbsp;</div>
        <div class="col-3">

            <!--Card content-->
            <div class="card-body blue-grey darken-1 white-text">
                <!--Text-->
				<div class="card-header"><h3>NewsFeed</h3></div>
                <p class="card-text white-text"><marquee direction="down" scrollamount="5"> 
								<ul>
								<li>Next batch will start in june.</li>
								<li>Results for PHP exam is out!login to see..</li>
								<li>Java Exam date is rescheduled, further deatils will be mailed to the students personally on their accounts.</li></marquee></p>
            </div>

        </div>
<!--panel-->

<div class="card-group container col-6" >
    <!--Panel-->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title h4">Getting Started</h5>
            <p class="card-text">Sign Up! if new this scheduler</p>
        </div>
		<div class="card-footer"><button type="button" data-toggle="modal" data-target="#mss" class="btn btn-outline-dark waves-effect">Register</button></div>
    </div>
    <!--/.Panel-->

    <!--Panel-->
    <div class="card">
        <div class="card-body" style="padding-left:20px">
            <h5 class="card-title h4">Choose your subject</h5>
            <p class="card-text">1. Java<br>2. PHP<br>3. Oracle<br>4. Python<br>5. IOT<br>6. Machine learning</p>
        </div>
		<div class="card-footer d-flex justify-content-center"><a type="button" class="btn btn-outline-primary waves-effect" href="subjects.html">Proceed</a></div>
    </div>
    <!--/.Panel-->

    <!--Panel-->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title h4">Feedback</h5>
            <p class="card-text">Give us your feedback here</p>
        </div>
		<div class="card-footer d-flex justify-content-center"><a type="button" class="btn btn-outline-secondary waves-effect" href="feedback.php">Feedback</a></div>
    </div>
</div></div>

<br>
<div class="comment_me">
<div class="card container" style="position:relative;top:40px">
    <div class="row">
        <div class="comments col-md-9" id="comments">
            <h3 class="mb-2">Comments</h3>
			
<!-- comment -->
            <div class="comment mb-2 row">
                <div class="comment-avatar col-md-1 col-sm-2 text-center pr-1">
                    <a href=""><img class="mx-auto rounded-circle img-fluid" src="http://demos.themes.guide/bodeo/assets/images/users/m103.jpg" alt="avatar"></a>
                </div>
                <div class="comment-content col-md-11 col-sm-10">
                    <h6 class="small comment-meta"><a href="#">admin</a> Today, 2:38</h6>
                    <div class="comment-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <a href>http://wwwwww.com</a> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                            <br>
                            <a href="" class="text-right small"><i class="ion-reply"></i> Reply</a>
                        </p>
                    </div>
                </div>
                
                <!-- reply is indented -->
                <div class="comment-reply col-md-11 offset-md-1 col-sm-10 offset-sm-2">
                    <div class="row">
                        <div class="comment-avatar col-md-1 col-sm-2 text-center pr-1">
                            <a href=""><img class="mx-auto rounded-circle img-fluid" src="http://demos.themes.guide/bodeo/assets/images/users/m101.jpg" alt="avatar"></a>
                        </div>
                        <div class="comment-content col-md-11 col-sm-10 col-12">
                            <h6 class="small comment-meta"><a href="#">phildownney</a> Today, 12:31</h6>
                            <div class="comment-body">
                                <p>Really?? Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                                    <br>
                                    <a href="" class="text-right small"><i class="ion-reply"></i> Reply</a>
                                </p>
                            </div>
                        </div>
                    </div>
               </div>
               <!-- /reply is indented -->
            </div>
            <div class="comment mb-2 row">
                <div class="comment-avatar col-md-1 col-sm-2 text-center pr-1">
                    <a href=""><img class="mx-auto rounded-circle img-fluid" src="http://demos.themes.guide/bodeo/assets/images/users/w102.jpg" alt="avatar"></a>
                </div>
                <div class="comment-content col-md-11 col-sm-10">
                    <h6 class="small comment-meta"><a href="#"> Simran</a> Yesterday, 5:03 PM</h6>
                    <div class="comment-body">
                        <p>Sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                            <br>
                            <a href="" class="text-right small"><i class="ion-reply"></i> Reply</a>
                        </p>
                    </div>
                </div>

<!-- /comment -->
            <div class="row pt-2">
                <div class="col-12">
                    <a href="" class="btn btn-sm btn-primary">Comment</a>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<!--comment table-->

<!--/comment table-->
	<!--Modal: Login / Register Form-->

<div class="modal fade" id="mss" tabindex="-1" role="dialog" aria-labelledby="mss" aria-hidden="true">
    <div class="modal-dialog cascading-modal " role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs blue-gradient" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 8-->
                    <div class="tab-pane fade show active" id="panel8" role="tabpanel">
										<form method="post">
                        <!--Body-->
                        <div class="modal-body">
														<div class="md-form form-sm mb-5">
                                <i class="fa fa-user prefix" ></i>
                                <input type="text" name="up1" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" > First Name</label>
                            </div>
														<div class="md-form form-sm mb-5">
                                <i class="fa fa-user prefix" ></i>
                                <input type="text" name="up2" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" >Last Name</label>
                            </div>
														
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="email"  name="up3" id="modalLRInput12" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
                            </div>

                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password"  name="up4" id="modalLRInput13" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
                            </div>
														
														<div class="md-form form-sm mb-5">
                                <i class="fa fa-user prefix" ></i>
                                <input type="text" name="up5" id="modalLRInput14" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput14">Gender</label>
                            </div>
														
														<div class="md-form form-sm mb-5">
                                <i class="fa fa-address-book prefix" ></i>
                                <input type="text" name="up6" id="modalLRInput14" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput14">Address</label>
                            </div>

                            <div class="text-center form-sm mt-2">
                                <button class="btn btn-info" name="signup_1">Sign up <i class="fa fa-sign-in ml-1"></i></button>
                            </div>

                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-right">
                                <p class="pt-1">Already have an account? <a data-toggle="tab" href="#panel" role="tab" class="blue-text">Log In</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div></form>
                    </div>
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form-->
  <!--admin login-->
<div class="modal fade" id="mss2" tabindex="-1" role="dialog" aria-labelledby="mss2" aria-hidden="true">
    <div class="modal-dialog cascading-modal " role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-2 blue-gradient" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel91" role="tab"><i class="fa fa-user mr-1"></i>Admin Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel99" role="tab"><i class="fa fa-user-plus mr-1"></i>Admin Register</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 9-->
                    <div class="tab-pane fade in show active" id="panel91" role="tabpanel">
										<form method="post" data-ajax="false">
                        <!--Body-->
                        <div class="modal-body mb-1">
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="email" class="form-control form-control-sm" name="in11" required>
                                <label data-error="wrong" data-success="right">Your email / Username</label>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate" name="in22" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                            </div>
                            <div class="text-center mt-2">
                                <button class="btn btn-info" name="login_1">Log in <i class="fa fa-sign-in ml-1"></i></button>
                            </div>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p>Not a member? <a data-toggle="tab" href="#panel99" role="tab" class="blue-text">Sign Up</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>

                    </div></form>
                    <!--/.Panel 9-->

                    <!--Panel 10-->
                    <div class="tab-pane fade" id="panel99" role="tabpanel">
										<form method="post">
                        <!--Body-->
                        <div class="modal-body">
														<div class="md-form form-sm mb-5">
                                <i class="fa fa-user prefix" ></i>
                                <input type="text" name="up11" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" > First Name</label>
                            </div>
														<div class="md-form form-sm mb-5">
                                <i class="fa fa-user prefix" ></i>
                                <input type="text" name="up22" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" >Last Name</label>
                            </div>
														
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="email"  name="up33" id="modalLRInput12" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
                            </div>

                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password"  name="up44" id="modalLRInput13" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
                            </div>
														
														<div class="md-form form-sm mb-5">
                                <i class="fa fa-user prefix" ></i>
                                <input type="text" name="up55" id="modalLRInput14" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput14">Gender</label>
                            </div>
														
														<div class="md-form form-sm mb-5">
                                <i class="fa fa-address-book prefix" ></i>
                                <input type="text" name="up66" id="modalLRInput14" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput14">Address</label>
                            </div>

                            <div class="text-center form-sm mt-2">
                                <button class="btn btn-info" name="signup_9">Sign up <i class="fa fa-sign-in ml-1"></i></button>
                            </div>

                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-right">
                                <p class="pt-1">Already have an account? <a data-toggle="tab" href="#panel91" role="tab" class="blue-text">Log In</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div></form>
                    </div>
                    <!--/.Panel 10-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form-->
<!--/.admin login-->
  
<div class="modal fade" id="mss3" tabindex="-1" role="dialog" aria-labelledby="mss3" aria-hidden="true">
    <div class="modal-dialog cascading-modal " role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-2 blue-gradient" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel9" role="tab"><i class="fa fa-user mr-1"></i>User Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel10" role="tab"><i class="fa fa-user-plus mr-1"></i>User Register</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 9-->
                    <div class="tab-pane fade in show active" id="panel9" role="tabpanel">
										<form method="post" data-ajax="false">
                        <!--Body-->
                        <div class="modal-body mb-1">
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="email" class="form-control form-control-sm" name="in1" required>
                                <label data-error="wrong" data-success="right">Your email / Username</label>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate" name="in2" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                            </div>
                            <div class="text-center mt-2">
                                <button class="btn btn-info" name="login_1">Log in <i class="fa fa-sign-in ml-1"></i></button>
                            </div>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p>Not a member? <a data-toggle="tab" href="#panel10" role="tab" class="blue-text">Sign Up</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>

                    </div></form>
                    <!--/.Panel 9-->

                    <!--Panel 10-->
                    <div class="tab-pane fade" id="panel10" role="tabpanel">
										<form method="post">
                        <!--Body-->
                        <div class="modal-body">
														<div class="md-form form-sm mb-5">
                                <i class="fa fa-user prefix" ></i>
                                <input type="text" name="up1" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" > First Name</label>
                            </div>
														<div class="md-form form-sm mb-5">
                                <i class="fa fa-user prefix" ></i>
                                <input type="text" name="up2" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" >Last Name</label>
                            </div>
														
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="email"  name="up3" id="modalLRInput12" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
                            </div>

                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password"  name="up4" id="modalLRInput13" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
                            </div>
														
														<div class="md-form form-sm mb-5">
                                <i class="fa fa-user prefix" ></i>
                                <input type="text" name="up5" id="modalLRInput14" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput14">Gender</label>
                            </div>
														
														<div class="md-form form-sm mb-5">
                                <i class="fa fa-address-book prefix" ></i>
                                <input type="text" name="up6" id="modalLRInput14" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput14">Address</label>
                            </div>

                            <div class="text-center form-sm mt-2">
                                <button class="btn btn-info" name="signup_1">Sign up <i class="fa fa-sign-in ml-1"></i></button>
                            </div>

                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-right">
                                <p class="pt-1">Already have an account? <a data-toggle="tab" href="#panel" role="tab" class="blue-text">Log In</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div></form>
                    </div>
                    <!--/.Panel 10-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form-->
      
    </div>
  </div><br><br><br>
  
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
                <a href="#!" class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#mss">Sign up!</a>
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
<?php
if(isset($a)) { ?>
<script type="text/javascript"> toastr.success('Succussfully Signed Up!'); </script><?php } 
 if(isset($b)) {?>
<script type="text/javascript"> toastr.error('Sorry! Failed to Sign Up'); </script> <?php } 
 if(isset($c)) {?>
<script type="text/javascript"> toastr.error('Invalid Username/Password'); <?php } ?>
</script>
</body>

</html>
