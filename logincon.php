<?php
session_start();

	$con = mysql_connect("localhost","root");
	mysql_select_db("quizdb",$con);
	$userName = $_POST['user'];
	$passWord = $_POST['pass'];
	$sql="SELECT * FROM users WHERE username='".$userName."' and password='".$passWord."'";
	$result = mysql_query($sql, $con);
	$records = mysql_num_rows($result);
	$row = mysql_fetch_array($result);
	
	if ($records==0)
	{
		echo '<script type="text/javascript">alert("Wrong Password or Username");window.location=\'menu.php\';</script>';
	}
	else
	{
		session_regenerate_id();
		$_SESSION['username'] = $userName;
		header("location: add_quiz.php");
	}
	
	mysql_close($con);
?>
