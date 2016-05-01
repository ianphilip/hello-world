
<?php
session_start();
?>

<?php 


DEFINE('BASE_PATH','http://localhost/Word_quiz_translation/quiz_start.php');
$con = mysql_connect ("localhost","root");
	   mysql_select_db("quizdb", $con);
	
if(!empty($_SESSION['name'])){
    
    $right_answer=0;
    $wrong_answer=0;
    $unanswered=0; 
  
   $keys=array_keys($_POST);
   $order=join(",",$keys);
   
   //$query="select * from questions id IN($order) ORDER BY FIELD(id,$order)";
  // echo $query;exit;
   
   $response=mysql_query("select id,answer from questions where id IN($order) ORDER BY FIELD(id,$order)")   or die(mysql_error());
   
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
   $name=$_SESSION['name'];  
   mysql_query("update user_kids set score='$right_answer' where user_name='$name'");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Word Quiz Trans</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet" media="screen">
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
<br>
        <header>
            <p class="text-center">
              <center> <h3> Welcome:<?php 
                if(!empty($_SESSION['name'])){
                    echo $_SESSION['name'];
                }?></h3></center>
               
            </p>
        </header>
        <div class="container result"> 
           <div class="row"> 
                  
                  
                  <div class="col-xs-6 col-sm-3 col-lg-3"> 
                   
                  
                       <div style="margin-top: 30%">
                        <h3><p>Total no. of right answers : <span class="answer"><?php echo $right_answer;?></span></p>
                        <p>Total no. of wrong answers : <span class="answer"><?php echo $wrong_answer;?></span></p>
                        <p>Total no. of Unanswered Questions : <span class="answer"><?php echo $unanswered;?></span></p>  </h3>                 
                       </div> 
                     <a href="<?php echo BASE_PATH;?>" class='btn btn-success btn-lg'>Start new Quiz!!!</a>                   
                      <a href="logout.php" class='btn btn-success btn-lg '>Logout</a>
                   </div>
                    
            </div>    
            <div class="row">    
                    
            </div>
        </div>
        <footer>
           
        </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/jquery.validate.min.js"></script>

        

inin    </body>
</html>
<?php }else{
    
 header( 'http://localhost/Word_quiz_translation/quiz_start.php' ) ;
      
}?>