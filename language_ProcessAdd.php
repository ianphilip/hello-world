

	<?php
	include('includes/header.html');

	error_reporting(-1);
	ini_set('display_errors', 'On');

	//Check for empty fields
	if(	empty($_POST['lang']))

	{
		echo '<script type="text/javascript" >alert("Please Complete All Field");window.location=\'Add_language.php\';</script>';

		exit();
	}
	$lang = $_POST['lang'];
	require_once('includes/db_conn.php');
	$query = "INSERT INTO word_trans
				-- (trans_id, lang_word)
				 VALUES (NULL, '".$lang."')";

	$result = $dbc->query($query);

	if($result){
		echo '<script type="text/javascript" >alert("Language  Add Succesfully");window.location=\'Add_language.php\';</script>';

	} else {
		echo '<script type="text/javascript" >alert("System Error");window.location=\'Add_language.php\';</script>';
	}
	$dbc->close();



	include('includes/footer.html');
	?>

