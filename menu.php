
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Word Quiz Trans</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<link href="css/theme.css" rel="stylesheet">
		<link href="css/tactive_and_focus.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
		<link rel="icon" type="image/png" href="img/logo.png" />
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
<!--login modal-->
<br><img alt="full screen background image" src="img/cloud-wallpaper-hd-background-5.png" id="full-screen-background-image"/> 
<div id="loginModal" class="modal show" tabindex="-5" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
                  <h1 class="text-center"><img src="img/User_Circle.png" alt="image" height="150px" width="150px"> </h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-20 center-block" method="post" action="logincon.php">
            <div class="form-group">
			
              <input type="text" class="form-control input-lg" name="user" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" name="pass" placeholder="Password">
            </div>
            <div class="form-group">
			
              <button class="btn btn-primary btn-lg btn-block"><img src="img/user-white.png">&nbsp Sign In</button>
                          </div>
          </form>
      </div>
      <div class="modal-footer">
				<a type="button" href="quiz_start.php" class="btn btn-success  btn-lg"><img src="img/check-white.png">&nbsp Start Quiz here</a>
      </div>
  </div>
  </div>	<center><?php
include ('includes/footer.html');
?></center>
</div>
	<!-- script references -->

	</body>
</html>