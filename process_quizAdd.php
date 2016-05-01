

	<?php
	include('includes/header.html');

	error_reporting(-1);
	ini_set('display_errors', 'On');

	//Check for empty fields
	if(
		empty($_POST['question'])||
		empty($_POST['answer1'])||
		empty($_POST['answer2'])||
		empty($_POST['answer3'])||
		empty($_POST['answer4'])||
		empty($_POST['correct_answer'])||
		empty($_POST['select']))
	{
		echo '<script type="text/javascript" >alert("Please Complete All Field");window.location=\'add_quiz.php\';</script>';

		exit();
	}

	//Create short variables
	
	$question = $_POST['question'];
	$answer1 = ($_POST['answer1']);
	$answer2 = ($_POST['answer2']);
	$answer3 = ($_POST['answer3']);
	$answer4 = ($_POST['answer4']);
	$correct_answer = ($_POST['correct_answer']);
	$select = ($_POST['select']);

	//connect to the database
	require_once('includes/db_conn.php');

	//Create the insert query
	$query = "INSERT INTO questions
				-- (id, ,question_name, answer1, answer2, answer3, answer4,answer ,category_name)
				 VALUES (NULL, '".$question."','".$answer1."','".$answer2."','".$answer3."','".$answer4."','".$correct_answer."','".$select."')";

	$result = $dbc->query($query);

	if($result){
		echo '<script type="text/javascript" >alert("Quiz Add Succesfully");window.location=\'add_quiz.php\';</script>';

	} else {
		echo '<script type="text/javascript" >alert("System Error");window.location=\'add_quiz.php\';</script>';
	}
	$dbc->close();



	include('includes/footer.html');
	?>

