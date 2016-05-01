<?php

	$Id=$_GET['cat_id'];
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("quizdb", $con);
	// Specify the query to Insert Record
	$sql = "delete from category where cat_id='".$Id."'";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Category Deleted Succesfully");window.location=\'category_quiz.php\';</script>';

	
?>