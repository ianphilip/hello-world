
<?php  
include('includes/header.html');
	
	$categot=$_POST['id'];
	$select=$_POST['select'];
	$idword=$_POST['idword'];
	$word=$_POST['word'];
	$path1 = $_FILES["file"]["name"];
	move_uploaded_file($_FILES["file"]["tmp_name"],"/audio/"  .$_FILES["file"]["name"]);
	$con = mysql_connect ("localhost","root");
	mysql_select_db("quizdb", $con);
	$sql = "insert into word_translation(id,language_word,word_id,words,audio) values('".$categot."','".$select."','".$idword."','".$word."','".$path1."')";
	mysql_query ($sql,$con);
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Translation Inserted Succesfully");window.location=\'translation.php\';</script>';

	
?>
