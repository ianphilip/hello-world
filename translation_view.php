<?php
include('includes/header.html');
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
	<h1><img src="img/google-translate-android-app.png" height="50px" width="50px">&nbsp Translator</h1>

<h4>Convert From:</h4>

	<form action="translate_lang.php" method="GET">
	<?php
				mysql_connect('localhost','root','');
				mysql_select_db('quizdb');
				$query="SELECT DISTINCT  lang_word FROM language_trans  ";
				$result=mysql_query($query);
			?>
			<select  class="form-control" name="select" id="select">
				<option>-- Select Language --</option>
				<?php
					while(list($lang_word)=mysql_fetch_row($result)) {
					echo "<option value=\"".$lang_word."\">".$lang_word."</option>";
					}
				?>
			</select>
		 <br>
		<div class="form-group">
			<script>
				function trans()
				{
					var translated = 'aso';
					var getwordlang = document.getElementById("text").value;
					var equal = getwordlang =translated;
					if(equal)
					{
						document.write(translated);
					}
				}
			</script>
					
                  <label for="text">Word Language</label>
                <input type="text" class="form-control" id="text" name="text" placeholder="Enter Word Here!">
            </div>

			<button type="submit" class="btn btn-primary btn-large" onClick = "trans()" value="submit" name="submit"><img src="img/recycle-white.png">&nbsp Translate</button>
	<h4>Convert Into:</h4><?php ?>
	
	<div class="form-group">
                  <label for="translate">Translated</label>
                <input type="translate" class="form-control" id="translate" name="text" placeholder="Enter Word Here!">
            </div>

			<audio controls="yes" type="audio/mp3"  id="audio" value="audio" name="audio"><img src="img/audio-white.png"></audio>
    
	</form>
	<br>
	<?php include('includes/footer.html') ?>
	</div>
		</div>