<?php
session_start();
?>


<?php
include ('includes/db_conn.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Word Quiz Trans</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
	
<link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">
	<link rel="stylesheet" href="style1.css" type="css/text">
			<style>
	html, body {
  height: 100%;
  width: 100%;
  padding: 0;
  margin: 0;
}
#full-screen-background-image {
  z-index: -999;
  min-height: 100%;
  min-width: 1024px;
  width: 100%;
  height: auto;
  position: fixed;
  top: 0;
  left: 0;
}

#wrapper {
  position: relative;
  width: 800px;
  min-height: 400px;
  margin: 100px auto;
  color: #333;
}
	
	</style>

	</head>
	<body>
 <img alt="full screen background image" src="img/cloud-wallpaper-hd-background-5.png" id="full-screen-background-image" /> 
<br>&nbsp <a href="menu.php" type="button" class="btn btn-success ">
								  <img src="img/carat-l-white.png">&nbsp Back
							</a>
		<header>
			<p class="text-center" >
				<center><h3>Welcome: <?php if(!empty($_SESSION['name'])){echo $_SESSION['name'];}?></h3></center>
			</p>
		</header>
		<div class="container">
			<div class="row">
				<div class="col-xs-14 col-sm-7 col-lg-7">
					<div class='image'>
						<img src="img/NYC-parking-ticket-10-question-quiz.png" class="img-responsive"/>
					</div>
				</div>
				<div class="col-xs-10 col-sm-5 col-lg-5">
					<div class="intro">
						<p class="text-center">
							Choose Category:
						</p>
						<?php if(empty($_SESSION['name'])){?>
						<form class="form-signin" method="post"  id='signin' name="signin" action="questions.php">
							<div class="form-group"><center><h3>Please enter your name:</h3></center>
								<input type="text" id='name' name='name' class="form-control" required placeholder="Enter your Name"/>
								<span class="help-block"></span>
							</div>
							<div class="form-group">
							<p class="text-center">
							<center><h3>Select Category</h3></center>
						</p>
							    <?php
		$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'quizdb';
mysql_select_db($dbname);


			$query="SELECT DISTINCT  category_name FROM category";
			$result=mysql_query($query);
			
			mysql_close($conn);
	?>
	<select  class="form-control" name="select" id="select"  required	onfocus="this.style.backgroundColor='rgb(255,253,216)';"
  onblur="this.style.backgroundColor='';">
			
			<?php
				while(list($category_name)=mysql_fetch_row($result)) {
				echo "<option value=\"".$category_name."\">".$category_name."  </option>";
			}
		   ?>
			</select>
                                <span class="help-block"></span>
							</div>

							<br>
							<button class="btn btn-success btn-block btn-lg" type="submit">
								   Start now!
							</button>
						</form>

						<?php }else{?>
						
						    <form class="form-signin" method="post" id="signin" name="signin" action="questions.php">
								<div class="form-group">
                                <?php
									$dbhost = 'localhost';
									$dbuser = 'root';
									$dbpass = '';
									$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
									$dbname = 'quizdb';
									mysql_select_db($dbname);

									$query="SELECT DISTINCT  category_name FROM category";
									$result=mysql_query($query);
											mysql_close($conn);
								?>
							<select  class="form-control" name="select" id="select"  required	onfocus="this.style.backgroundColor='rgb(255,253,216)';"
						  onblur="this.style.backgroundColor='';">
					
								<?php
									while(list($category_name)=mysql_fetch_row($result)) {
									echo "<option value=\"".$category_name."\">".$category_name."  </option>";
								}
							   ?>
							</select>
                                <span class="help-block"></span>
                            </div>

                            <br>
                            <button class="btn btn-success btn-block btn-lg" type="submit">
                               Start now!
                            </button><br>
							<a href="logout.php" class="btn btn-success btn-lg"><img src="img/power-white.png">&nbsp Logout</a>
                        </form>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	
		<br>
<center><?php include('includes/footer.html');?></center>
	</body>
</html>