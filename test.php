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
<?php
if(isset($_POST["test_sub"])) {
	$checkans = mysql_query("SELECT * FROM exam");
	$correct_questions=0;
	$wrong_questions=0;
	$total_questions=0;
	$count=1;
	
	if(mysql_num_rows($checkans) > 0) {
		while($chk = mysql_fetch_assoc($checkans)) {
			$total_questions++;
			if(isset($_POST["$count"])) {
				if($chk["cans"] == $_POST["$count"]) {
					$correct_questions++;
				} else {
					$wrong_questions++;
				}
			} else {
					$wrong_questions++;
			}
			$count++;
		}
	}
	
	$sresult = "INSERT INTO results (name,correct_ques,wrong_ques,total_ques) VALUES ('$fname','$correct_questions','$wrong_questions','$total_questions')";
	if(mysql_query($sresult)) {
		$a=1;
	} else {
		$b=1;
	}
}
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

<body style="padding-right:0px !important;background-image: url(http://www.kinyu-z.net/data/wallpapers/12/742940.jpg)">

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg h6 text-white sticky-top scrolling-navbar" id="mainNav" style="font-family:Gill Sans MT">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="img" src="img/1.png" width="150px" height="50px"></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
		  <li class="nav-item dropdown" style="margin: 0 0 0 30px;">
                <a class="nav-link" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false" href="index.php" style="color: #FFFFFF;"><b>Home</b></a>
                <div class="dropdown-primary animated bounceIn" aria-labelledby="navbarDropdownMenuLink">
                </div>
            </li>
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
<!--/.Navbar-->
<!-- Content -->    
<div class="container form form-control">
<form class="form" method="post">
<H1> MULTIPLE CHOICE QUESTIONS </H1>
<?php
$i=1;
$sques = mysql_query("SELECT * FROM exam");
if(mysql_num_rows($sques) > 0) { 
	while($row = mysql_fetch_assoc($sques)) {
?>	
	<i class="fa fa-check-square-o" aria-hidden="true"></i>
	<label>Question <?php echo $row["id"]; ?> : <?php echo $row["ques"]; ?></label><br>
    <div class="form-check ml-4">
        <input class="form-check-input" name="<?php echo $row["id"]; ?>" type="radio" id="<?php echo $i; ?>" value="1">
        <label class="form-check-label" for="<?php echo $i; ?>"><?php echo $row["mca"]; ?></label>
    </div>
		<?php $i++; ?>
    <div class="form-check ml-4">
        <input class="form-check-input" name="<?php echo $row["id"]; ?>" type="radio" id="<?php echo $i; ?>" value="2">
        <label class="form-check-label" for="<?php echo $i; ?>"><?php echo $row["mcb"]; ?></label>
    </div>
		<?php $i++; ?>
    <div class="form-check ml-4">
        <input class="form-check-input" name="<?php echo $row["id"]; ?>" type="radio" id="<?php echo $i; ?>" value="3">
        <label class="form-check-label" for="<?php echo $i; ?>"><?php echo $row["mcc"]; ?></label>
    </div>
		<?php $i++; ?>
		<div class="form-check ml-4">
        <input class="form-check-input" name="<?php echo $row["id"]; ?>" type="radio" id="<?php echo $i; ?>" value="4">
        <label class="form-check-label" for="<?php echo $i; ?>"><?php echo $row["mcd"]; ?></label>
    </div><br>
		<?php $i++; ?>
     
<?php 
	}
} else {
	echo "0 questions";
}?>
	
<button type="submit" class="btn btn-default btn-lg btn-block" name="test_sub">Submit Test</button></form>
<!-- Testing Purpose ONLY 
<?php if(isset($total_questions)) { ?>
<h4>TQ : <?php echo $total_questions; ?> CQ: <?php echo $correct_questions; ?> WQ: <?php echo $wrong_questions; ?></h4> <?php } ?>
-->
</div>

  
  <!-- Central Modal Medium Success -->
  <div class="modal fade" id="testcom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success" role="document">
      <!--Content-->
      <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
              <p class="heading lead">Test Completed</p>
  
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="white-text">&times;</span>
              </button>
          </div>
  
          <!--Body-->
          <div class="modal-body">
              <div class="text-center">
                  <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                  <p class="container">Correct Questions : <?php echo $correct_questions; ?><br> Wrong Questions : <?php echo $wrong_questions; ?><br>
									Total Questions : <?php echo $total_questions; ?></p>
              </div>
          </div>
  
          <!--Footer-->
          <div class="modal-footer justify-content-center">
              <a type="button" href="results.php" class="btn btn-success">Test Results<i class="fa fa-diamond ml-1"></i></a>
              <a type="button" href="index.php" class="btn btn-outline-success waves-effect" data-dismiss="modal">Back To Home Page</a>
          </div>
      </div>
      <!--/.Content-->
  </div>
  </div>
  <!-- Central Modal Medium Success-->
  
                                          
<!--./Content -->
<!--Footer-->
<footer class="page-footer font-small stylish-color-dark pt-4 mt-4">

    <!--Footer Links-->
    <div class="container text-center text-md-left">
        <div class="row">

            <!--First column-->
            <div class="col-md-4">
				<img class="img" src="img/1.png" width="180px" height="60px"><br><hr>
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
<script type="text/javascript"> toastr.success('Succussfully Submitted Test!'); 
      $('#testcom').modal('show');
</script><?php }  if(isset($b)) {?>
<script type="text/javascript"> toastr.error('Oops ! There is some problem.'); </script> <?php } ?>
</body>

</html>
