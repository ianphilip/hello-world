 
 <?php   include('includes/header.html'); ?>
 
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'quizdb';
mysql_select_db($dbname);

$query = "SELECT * FROM category";
$result = mysql_query($query);
$num_rows = mysql_num_rows($result);
	

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
  <body>


<form action="process_quizAddcategory.php" method="post" enctype="multipart/form-data" name="upload" style="margin:5px;">
<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <h1><img src="img/badges_Android_BlogReader_Stage5.png" height="50px" width="50px">&nbsp Add Category Quiz</h1>
 		<div class="form-group">
                <label for="desc">Category:</label>
                <input type="text" class="form-control" id="desc" name="desc" required placeholder="Enter your category here">
            </input>
			</div>
<label class="form-group">
				<label for="image">Image:</label>
				<input type="file" class="btn btn-success btn-large" required name="image" >
					</input>
			</input>
			</label>
			<br>
<button type="submit" class="btn btn-success btn-large" value="upload" name="upload"><img src="img/plus-white.png">&nbsp Add Category Quiz</button>
	</div>
</div>	
</form>


<body>

		<table>
	  <thead>
		<tr>
      
			 <center><h1>Category Quiz</h1> </center>
                <tr>
                    <th><strong>Id</strong></th>
                    <th><strong>Description</strong></th>
					 <th><strong>Image</strong></th>
                      <th><strong>Delete</strong></th>
					          <th><strong>edit</strong></th>
                </tr>  
            </thead>
           	 <tbody>             
              <?php
				while($data4 = mysql_fetch_array($result, MYSQL_ASSOC))
					{					
				
print "<tr>"; 
print "<td>" . $data4 ['cat_id'] . "</td>"; 
print "<td>" . $data4 ['category_name'] . "</td>"; 
print '<td><img src="../img/' . $data4 ['image'] . '" alt="image" width="124" height="124" ></td>'; 
print '<td> <a type="button" class="btn btn-danger" href="delete_categoryQuiz.php?cat_id=' . $data4 ['cat_id'] .'"><img src="img/delete-white.png">&nbspDelete</a></td>';
print '<td> <a type="button" class="btn btn-success" href="#?cat_id=' . $data4 ['cat_id'] .'">Edit</a></td>';

print "</tr>";			
					}echo "$num_rows Row\n";
						?>
		
      
	  
             </tbody>
        </table>

	<?	include('includes/footer.html');?>


</body>
</html>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
