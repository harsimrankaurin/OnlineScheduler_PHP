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
$subj = $_GET["subj"];
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
	.table-wrapper {
    display: block;
    max-height: 300px;
    overflow-y: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
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

<body style="padding-right:0px !important;">

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
                <a class="nav-link" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false" href="home.php" style="color: #FFFFFF;"><b>Home</b></a>
                <div class="dropdown-primary animated bounceIn" aria-labelledby="navbarDropdownMenuLink">
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

<br>

<div class="card card-cascade narrower">

    <!--Card image-->
    <div class="view gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-center align-items-center">

        <a href="" class="white-text mx-3 h3">Test Results</a>

    </div>
    <!--/Card image-->

    <div class="px-4">

        <div class="table-wrapper">
            <!--Table-->
            <table class="table table-hover mb-0">

                <!--Table head-->
                <thead>
                    <tr>
                        <th class="th-lg"><a>Serial No. <i class="fa fa-sort ml-1"></i></a></th>
                        <th class="th-lg"><a href="">Name<i class="fa fa-sort ml-1"></i></a></th>
						<th class="th-lg"><a href="">Subject<i class="fa fa-sort ml-1"></i></a></th>
                        <th class="th-lg"><a href="">Correct Questions<i class="fa fa-sort ml-1"></i></a></th>
                        <th class="th-lg"><a href="">Incorrect Questions<i class="fa fa-sort ml-1"></i></a></th>
                        <th class="th-lg"><a href="">Total Questions<i class="fa fa-sort ml-1"></i></a></th>
                    </tr>
                </thead>
                <!--Table head-->

                <!--Table body-->
                <tbody>
								<?php
								$getd = mysql_query("SELECT * FROM results");
								if(mysql_num_rows($getd) > 0) {
								while($row = mysql_fetch_assoc($getd)) {
								?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
						<td><?php echo $subj ?></td>
                        <td><?php echo $row["correct_ques"]; ?></td>
                        <td><?php echo $row["wrong_ques"]; ?></td>
                        <td><?php echo $row["total_ques"]; ?></td>
                    </tr>
								<?php } } ?>
                </tbody>
                <!--Table body-->
            </table>
            <!--Table-->
        </div>

        <hr class="my-0">
    </div>
</div>
    
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
	
// Material Select Initialization
$(document).ready(function() {
   $('.mdb-select').material_select();
 });
    
</script>
</body>

</html>
