	<?php
	session_start();
	?>
	<?php 
	$con = mysql_connect ("localhost","root");
	mysql_select_db("quizdb", $con);	
	$select='';
	 if(!empty($_POST['name'])){
		 $name=$_POST['name'];
		 $select=$_POST['select'];
		 mysql_query("INSERT INTO user_kids (id, user_name,score,category_name)VALUES ('NULL','$name',0,'$select')") or die(mysql_error());
		 $_SESSION['name']= $name;
		 $_SESSION['id'] = mysql_insert_id();
	 }
	$select=$_POST['select'];
	if(!empty($_SESSION['name'])){
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>Word Quiz Trans</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<!-- Bootstrap -->
			<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
			<link href="css/style.css" rel="stylesheet" media="screen">
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
		<style>
		html {
	  font-family: "Myriad Web Pro", sans-serif;
	}

	.quiz {
	  label {
		display: block;
		padding: 1rem;
		margin: .5rem;
		border-radius: 1rem;
		border: solid 3px #fff;
		
		&:hover {
		  border: solid 3px #fdd;
		}

		&.selected {
		  border: solid 3px #fdd;
		  
		  .check {
			background-position: 96px;
		  }
		}
		
		.check {
		  float: left;
		  width: 25px;
		  height: 25px;
		  background-image: url('http://dribbble.s3.amazonaws.com/users/1215/screenshots/541784/buttons_teaser.png');
		  background-position: 131px 86px;
		  margin-right: 1rem;
		}
	  }
	  
	  button {
		font-size: larger;
		padding: 1rem;
		float: right;
	  }
	}
		</style>
			
		
		</head>
		<body>
		 <img alt="full screen background image" src="img/cloud-wallpaper-hd-background-5.png" id="full-screen-background-image" /> 

		<br>
			<br>
			<header>
				<p class="text-center">
				  <center><h2>  Welcome : <?php if(!empty($_SESSION['name'])){echo $_SESSION['name'];}?></h2></center>
				</p>
			</header>
		   
			<div class="container question" >
				<div class="col-xs-12 col-sm-8 col-md-8 col-xs-offset-4 col-sm-offset-3 col-md-offset-3">
					<p>
						<h3>	You Choose Category: &nbsp <b><?php echo $_POST["select"]; ?></b></h3>
					</p>
					<hr>
				
					<form class="form-horizontal" role="form" id='login' method="post" action="result.php">
						<?php 
						$res = mysql_query("select * from questions where category_name = '".$select."' ORDER BY RAND() LIMIT 10") or die(mysql_error());
						$rows = mysql_num_rows($res);
						$i=1;
					while($result=mysql_fetch_array($res)){?>
						
			
						<?php if($i==1){?>         
						<div id='question<?php echo $i;?>' class='cont'>
					   <p class='questions' id="qname<?php echo $i;?>"><h3> <b><?php echo $i?></b>. &nbsp <?php echo $result['question_name'];?></h3></p>
						<h3><input type="radio"  value="1" id='radio1_ <?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>&nbsp  <?php echo $result['answer1'] ;?></h3>
					   <br/>
						<h3><input type="radio" value="2" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>&nbsp <?php echo $result['answer2'];?></h3>
						<br/>
						<h3><input type="radio" value="3" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>&nbsp <?php echo $result['answer3'];?></h3>
						<br/>
						<h3><input type="radio" value="4" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>&nbsp <?php echo $result['answer4'];?></h3>
						<br/>
						<h3><input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>                                                                      
						<br/>
						  <a href="quiz_start.php" class='btn btn-success btn-lg '><img src="img/carat-l-white.png">&nbsp Back</a>
						<button id='<?php echo $i;?>' class='next btn btn-success btn-lg' type='button'>Next &nbsp <img src="img/carat-r-white.png"></button>
						</div>     
						  
						 <?php }elseif($i<1 || $i<$rows){?>
						 
						   <div id='question<?php echo $i;?>' class='cont'>
						<p class='questions' id="qname<?php echo $i;?>"><h3><b><?php echo $i?></b>. &nbsp <?php echo $result['question_name'];?></h3></p>
						<h3><input type="radio" value="1" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>&nbsp <?php echo $result['answer1'];?></h3>
						<br/>
						<h3><input type="radio" value="2" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>&nbsp <?php echo $result['answer2'];?></h3>
						<br/>
						<h3><input type="radio" value="3" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>&nbsp <?php echo $result['answer3'];?></h3>
						<br/>
						<h3><input type="radio" value="4" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>&nbsp <?php echo $result['answer4'];?></h3>
						<br/>
						<input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>                                                                      
						<br/>
						<button id='<?php echo $i;?>' class='previous btn btn-success btn-lg' type='button'> <img src="img/carat-l-white.png">&nbsp Previous</button>                    
						<button id='<?php echo $i;?>' class='next btn btn-success btn-lg' type='button' >Next &nbsp <img src="img/carat-r-white.png"></button>
						</div>
							 
							
					   <?php }elseif($i==$rows){?>
						<div id='question<?php echo $i;?>' class='cont'>
						<p class='questions' id="qname<?php echo $i;?>"><h3><b><?php echo $i?></b>. &nbsp <?php echo $result['question_name'];?></h3></p>
						<h3><input type="radio"  value="1" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>&nbsp <?php echo $result['answer1'];?></h3>
						<br/>
						<h3><input type="radio" value="2" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>&nbsp <?php echo $result['answer2'];?></h3>
						<br/>
						<h3><input type="radio" value="3" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>&nbsp <?php echo $result['answer3'];?></h3>
						<br/>
						<h3><input type="radio" value="4" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>&nbsp <?php echo $result['answer4'];?></h3>
						<br/>
						<h3><input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>                                                                      
						<br/>
						
						<button id='<?php echo $i;?>' class='previous btn btn-success btn-lg' type='button'><img src="img/carat-l-white.png">&nbsp Previous</button>                    
						<button id='<?php echo $i;?>' class='next btn btn-success btn-lg' type='submit'>Finish &nbsp <img src="img/check-white.png"></button>
						</div>
						<?php } $i++;} ?>
						
					</form>
				</div>
			</div>
		   <footer>
			   
			</footer>


	<?php

	if(isset($_POST[1])){ 
	   $keys=array_keys($_POST);
	   $order=join(",",$keys);
	   
	   //$query="select * from questions id IN($order) ORDER BY FIELD(id,$order)";
	  // echo $query;exit;
	   
	   $response=mysql_query("select id,answer from questions where id IN($order) ORDER BY FIELD(id,$order)")   or die(mysql_error());
	   $right_answer=0;
	   $wrong_answer=0;
	   $unanswered=0;
	   while($result=mysql_fetch_array($response)){
		   if($result['answer']==$_POST[$result['id']]){
				   $right_answer++;
			   }else if($_POST[$result['id']]==5){
				   $unanswered++;
			   }
			   else{
				   $wrong_answer++;
			   }
		   
	   }
	   
	   
	   echo "right_answer : ". $right_answer."<br>";
	   echo "wrong_answer : ". $wrong_answer."<br>";
	   echo "unanswered : ". $unanswered."<br>";
	}
	?>
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="js/jquery-1.10.2.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.validate.min.js"></script>
			
			<script>
			$('.cont').addClass('hide');
			count=$('.questions').length;
			 $('#question'+1).removeClass('hide');
			 
			 $(document).on('click','.next',function(){
				 last=parseInt($(this).attr('id'));     
				 nex=last+1;
				 $('#question'+last).addClass('hide');
				 
				 $('#question'+nex).removeClass('hide');
			 });
			 
			 $(document).on('click','.previous',function(){
				 last=parseInt($(this).attr('id'));     
				 pre=last-1;
				 $('#question'+last).addClass('hide');
				 
				 $('#question'+pre).removeClass('hide');
			 });
			 
			 
			 
			</script>
		</body>
	</html>
	<?php }else{
		
	   header( 'Location: http://localhost/Word_quiz_translation/quiz_start.php' ) ;
	}
	?>