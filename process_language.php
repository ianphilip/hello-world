<?php
include('includes/header.html');

error_reporting(-1);
ini_set('display_errors', 'On');

//Check for empty fields
if(empty($_POST['tagalog']) ||
	 empty($_POST['audtag'])||
    empty($_POST['english'])||
    empty($_POST['audeng'])||
    empty($_POST['cebuano']) ||
	empty($_POST['audceb'])) 
{
    echo "Please complete all fields";
    exit();
}
//Create short variables
$tagalog = $_POST['tagalog'];
$audtag = $_POST['audtag'];
$english = $_POST['english'];
$audeng = $_POST['audeng'];
$cebuano = $_POST['cebuano'];
$audceb = $_POST['audceb'];


//connect to the database
require_once('includes/db_conn.php');

//Create the insert query
$query = "INSERT INTO translation
			-- (id, tagalog, tag_audio, english, eng_audio, cebuano, ceb_audio)
			 VALUES (NULL, '".$tagalog."','".$audtag."','".$english."','".$audeng."','".$cebuano."','".$audceb."')";

$result = $dbc->query($query);

if($result > 0){
    echo "Your Language has been saved";
} else {
    echo '<h1>System Error</h1>';
}	

$dbc->close();

include('includes/footer.html');
?>

