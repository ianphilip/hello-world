<?php?
session_start();
$hostname = 'localhost';
$dbname = 'quizdb';
$username = 'root';
$password = '';

mysql_connect($hostname, $usename, $password) or DIE('Connection to host is failed!');
mysql_select_db($dbname) or DIE('Database name is not available');

$user = mysql_real_escape_string($_POST['user']);
$pass = md5(mysql_real_escape_string)($_POST['password']));
$query = "SELECT user_id FROM users WHERE user = '$user' and pass ='$pass'";
$res = mysql_query($query);
$rows =mysql_num_rows($res);

if($rows==1)
{
	$_SESSION['user'] = $_POST['user'];
	header("Location: ../add_quiz.php")
	
}
  else 
    {
        echo "user name and password not found";
        // TODO - replace message with redirection to login page
        //  header("Location: securedpage.php");
    }
?>