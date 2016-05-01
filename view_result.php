<?php include('includes/header.html'); ?>


<?php
i
$query = "SELECT * FROM user_kids ORDER BY score DESC";
$result = mysql_query($query);

mysql_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
	<link rel="stylesheet" href="style1.css" type="css/text">
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
<body>

	<table>
  <thead>
    <tr>
      <th>Id</th>
	  <th>Kid Name</th>
      <th>Category Quiz</th>
      <th>Quiz Score</th>
	   <th>Delete</th>
    </tr>
  </thead>
  <center><h1><img src="img/goldplayer_icon.png" height="50px" width="50px">&nbsp Quiz Records</h1></center>
  <tbody>
  
  <?php
  while($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
{ 
print "<tr>"; 
print "<td>" . $row['id'] . "</td>"; 
print "<td>" . $row['user_name'] . "</td>"; 
print "<td>" . $row['category_name'] . "</td>";
print "<td>" . $row['score'] . " &nbsp/&nbsp10</td>"; 
echo '<td> <center><a type="button" class="btn btn-primary" href="view_resultDelete.php?id=' . $row['id'] .'">Delete</a></center></td>';
print "</tr>"; 
} 

?>

  </tbody>
</table>
 
</table>	            
<?php include('includes/footer.html'); ?>
</body>
</html>

