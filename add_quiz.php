	<?php include('includes/header.html'); ?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Simple Online Quiz">  
	<link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">
	
  </head>
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<h1><img src="img/quiz_icon.png" height="50px" width="50px">&nbsp Add Quiz</h1>
		
			<form action="process_quizAdd.php" method="post">
				 
				 <div class="form-group">
	 <label class="control-label col-sm-2" for="category_que">Category</label> 
	   <?php
		mysql_connect('localhost','root','');
			mysql_select_db('quizdb');
			$query="SELECT DISTINCT  category_name FROM category";
			$result=mysql_query($query);
	?>
	<select  class="form-control input-lg	" name="select" id="select"  required	onfocus="this.style.backgroundColor='rgb(255,253,216)';"
  onblur="this.style.backgroundColor='';">
			<option>-- Select Category --</option>
			<?php
				while(list($category_name)=mysql_fetch_row($result)) {
				echo "<option value=\"".$category_name."\">".$category_name."  </option>";
			}
		   ?>
			</select>

			</div>
				<div class="form-group" onfocus="this.style.backgroundColor='rgb(255,253,216)';"
					onblur="this.style.backgroundColor='';">
					<label for="question">Ask Question:</label>
					<input type="text" class="form-control input-lg" id="question" name="question" required placeholder="Enter your question here">
				</div>
				<div class="form-group">
					<label for="correct_answer">Correct answer:</label>
					<input type="text" class="form-control input-lg" id="correct_answer" name="correct_answer"  required placeholder="Enter the correct answer here">
				</div>
				<div class="form-group">
					<label for="answer1">Wrong Answers:</label>
					<input type="text" class="form-control input-lg" id="answer1" name="answer1"  required placeholder="answer 1">
				</div>
				<div class="form-group">
					<label class="sr-only" for="answer2">Wrong Answers 2:</label>
					<input type="text" class="form-control input-lg" id="answer2" name="answer2"  required placeholder="answer 2">
				</div>
				<div class="form-group">
					<label class="sr-only" for="answer3">Wrong Answers 3:</label>
					<input type="text" class="form-control input-lg" id="answer3" name="answer3" required placeholder="answer 3">
				</div>
				<div class="form-group">
					<label class="sr-only" for="answer4">Wrong Answers 4:</label>
					<input type="text" class="form-control input-lg" id="answer4" name="answer4" required placeholder="answer 4">
				</div>
				<button type="submit" class="btn btn-success btn-large"  value="submit" name="submit"><img src="img/plus-white.png">&nbsp Add Question</button>
				
			</form>
		</div>
		 </div>

	<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

	$dbname = 'quizdb';
	mysql_select_db($dbname);

	$query = "SELECT * FROM questions";
	$result = mysql_query($query);

	mysql_close($conn);

	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="style1.css" type="css/text">

	</head>
	<body>

		<table>
	  <thead>
		<tr>
		  <th>Id</th>	
		  <th>Ask Question</th>
		  <th>Answer 1</th>
		  <th>Answer 2</th>
		  <th>Answer 3</th>
		  <th>Answer 4</th> 
		  <th>Category</th>
		  <th>Correct Answer</th>
		  <th>Delete</th>
		   <th>Edit</th>
		   
		 
		</tr>
	  </thead>
	  <center><h1>Quiz Questions</h1></center>
	  <tbody>
	  
	  <?php
	  while($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
	{ 
	print "<tr>"; 
	print "<td>" . $row['id'] . "</td>"; 
	print "<td>" . $row['question_name'] . "</td>"; 
	print "<td>" . $row['answer1'] . "</td>";
	print "<td>" . $row['answer2'] . "</td>";
	print "<td>" . $row['answer3'] . "</td>";
	print "<td>" . $row['answer4'] . "</td>";
	print "<td>" . $row['category_name'] . "</td>";
	print "<td>" . $row['answer'] . "</td>";
	echo '<td> <a type="button" class="btn btn-danger" href="delete_quiz.php?id=' . $row['id'] .'"><img src="img/delete-white.png">&nbsp Delete</a></td>';
	echo '<td> <a type="button" class="btn btn-success" href="edit_quiz.php?id=' . $row['id'] .'">Edit</a></td>';
	print "</tr>"; 
	} 
	?>

	  </tbody>
	</table>
	 
	</table>	            
	<?php include('includes/footer.html'); ?>
	</body>
	</html>



	  
