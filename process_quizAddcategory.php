  

<?php  
include('includes/header.html');
	
	$categot=$_POST['cat_id'];
	$desc=$_POST['desc'];
	$path1 = $_FILES["image"]["name"];
	move_uploaded_file($_FILES["image"]["tmp_name"],"../img/"  .$_FILES["image"]["name"]);
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("quizdb", $con);
	// Specify the query to Insert Record
	$sql = "insert into category(cat_id,category_name ,image) values('".$categot."','".$desc."','".$path1."')";
	$num_rows = mysql_num_rows($sql);

	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	header("location:category_quiz.php?cat_id=".$categot."")
	?>
