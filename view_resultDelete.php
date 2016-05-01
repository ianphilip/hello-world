<?php

	$Id=$_GET['id'];
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("quizdb", $con);
	// Specify the query to Insert Record
	$sql = "delete from user_kids where id='".$Id."'";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
		echo '<script type="text/javascript">var x=window.confirm("Are you sure you want to delete?")
if (x)
    window.alert("Deleted!")
else
    window.alert("Cancelled"); window.location=\'view_result.php\';</script>';

?>

</script>