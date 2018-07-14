<html>
<?php
	include("db.php");
	session_start();
	$Uemail = $_SESSION['email_tmp'];
	echo $Uemail;
	if(isset($_POST["submit"])) {
		$o1 = $_POST["i1"];
		$o3 = $_POST["i3"];
		$o4 = $_POST["i4"];
		$o5 = $_POST["i5"];
		$o6 = $_POST["i6"];
		$o7 = $_POST["i7"];
	$signup = mysql_query("INSERT INTO users (Uname,Uemail,Lpwd,Gender,Bdate) VALUES ('$o1','$o3','$o4','$o5','$o6','$o7')");
	}
	?>
<head>

</head>
<body>
<form name="f1" method="post">
Username :
<input type="text" name="i1" />
<br>
email :
<input type="text" name="i3" />
<br> Password :
<input type="text" name="i4" />
<br> Gender :
<input type="text" name="i5" />
<br> Birth Date :
<input type="text" name="i6" />
<br> Address :
<input type="text" name="i7" />
<input type="submit" name="submit" value="Sign Up" />
</form>
</body>
</html>