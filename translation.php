  <?php   include('includes/header.html'); ?>
 <?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connect to mysql');

$dbname = 'quizdb';
mysql_select_db($dbname);

$query = "SELECT * FROM word_trans";
$result = mysql_query($query);


mysql_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Simple Online Quiz">  
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">
	<link rel="stylesheet" href="style1.css" type="css/text">
  </head>


 
<div class="row">

    <div class="col-md-offset-2 col-md-8">
		<h3><label>Click Here To Add Language!</label></h3>
    <a type="button" class="btn btn-primary btn-large" name="lang" href="Add_language.php"><img src="img/plus-white.png" alt="plus">&nbsp Add Language</a>
	
        <h1><img src="img/google-translate-android-app.png" height="50px" width="50px">&nbsp Add Translation</h1>
	
		 <form action="add_file.php" method="post" enctype="multipart/form-data">
		 
		  <div class="form-group">
			<label class="control-label col-sm-2" for="language">Choose Language:</label>
  
			<?php
				mysql_connect('localhost','root','');
				mysql_select_db('quizdb');
				$query="SELECT DISTINCT  lang_word FROM language_trans  ";
				$result=mysql_query($query);
			?>
			<select  class="form-control" name="select" id="select" required>
				<option>-- Select Language --</option>
				<?php
					while(list($lang_word)=mysql_fetch_row($result)) {
					echo "<option value=\"".$lang_word."\">".$lang_word."</option>";
					}
				?>
			</select>
		 
		</div>
				<div class="form-group">
					<label for="idword">Id Word</label>
					<input type="text" class="form-control" id="idword" name="idword" reqiured placeholder="enter id!">
				</div>
				<div class="form-group">
					<label for="word">Word Language</label>
					<input type="text" class="form-control" id="word" name="word" reqiured placeholder="Enter word here!">
				</div>
		<label for="file">Audio:</label>
        <input type="file"   class="btn btn-success " id="file" name="file" required size="10000000"><br>
     
		<button type="submit" class="btn btn-success btn-large" value="submit" name="submit"><img src="img/plus-white.png" alt="plus">&nbsp Add Translation</button>
			
    </form>
	</br>
	</br>

			
			
			</div>
			</div>
			<br>
			
			<body>
     <table>
  <thead>
    <tr>
		<th><th>
      <th>Id</th>
	  <th>Language Word </th>	
	  <th>Word ID</th>
	  <th>Word </th>
	  <th>Audio Tagalog &nbsp <img src="img/audio-white.png"></th>
	  	<th>Delete</th>
	   <th>Edit</th>
	   
	 
    </tr>
  </thead>
  <center><h1>Translation </h1></center>
  <tbody>
    <?php
	
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'quizdb';
mysql_select_db($dbname);

$query = ("SELECT * FROM word_translation");
$result = mysql_query($query);

mysql_close($conn);

?>
  <?php

  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{ 

print "<tr>"; 
print "<td> <input type='checkbox'> <td>"; 
print "<td>" . $row['id'] . "</td>"; 
print "<td>" . $row['language_word'] . "</td>"; 
print "<td>" . $row['word_id'] . "</td>"; 
print "<td>" . $row['words'] . "</td>"; 
echo "<td> <audio  controls='yes'  src=".$row['audio']."></audio> </td>";
echo '<td> <a type="button" class="btn btn-danger" href="#?id=' . $row['id'] .'"><img src="img/delete-white.png">&nbspDelete</a></td>';
echo '<td> <a type="button" class="btn btn-success" href="#?id=' . $row['id'] .'">Edit</a></td>';
print "</tr>"; 

}   

?>

</div>
</body>

 
 </html>
  