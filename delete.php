<?php

	$Id=$_GET['id'];
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("quizdb", $con);
	// Specify the query to Insert Record
	$sql = "delete from kiddie_result where kid_id='".$Id."'";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">confirm("Quiz Result Deleted Succesfully");window.location=\'view_result.php\';</script>';

	
?>