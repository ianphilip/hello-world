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
			<h1><img src="img/google-translate-android-app.png" height="50px" width="50px">&nbsp Add Language</h1>
		
			<form action="language_ProcessAdd.php" method="post">
		
				<div class="form-group" onfocus="this.style.backgroundColor='rgb(255,253,216)';"
					onblur="this.style.backgroundColor='';">
					<label for="lang">Add Language</label>
					<input type="text" class="form-control input-lg" id="lang" name="lang" required placeholder="Enter your question here">
				</div>
				
				<button type="submit" class="btn btn-success btn-large"  value="submit" name="submit"><img src="img/plus-white.png">&nbsp Add Language</button>
				
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

	$query = "SELECT * FROM word_trans";
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
		  <th>Language</th>
		   <th>Delete</th>
		   <th>Edit</th>
		   
		 
		</tr>
	  </thead>
	  <center><h1>Languages</h1></center>
	  <tbody>
	  
	  <?php
	  while($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
	{ 
	print "<tr>"; 
	print "<td>" . $row['trans_id'] . "</td>"; 
	print "<td>" . $row['lang_word'] . "</td>"; 
	echo '<td> <a type="button" class="btn btn-danger" href="delete_quiz.php?id=' . $row['trans_id'] .'"><img src="img/delete-white.png">&nbsp Delete</a></td>';
	echo '<td> <a type="button" class="btn btn-success" href="edit_quiz.php?id=' . $row['trans_id'] .'">Edit</a></td>';
	print "</tr>"; 
	} 
	?>

	  </tbody>
	</table>
	 
	</table>	            
	<?php include('includes/footer.html'); ?>
	</body>
	</html>



	  
