<?php
session_start();
session_destroy();
header( "location:quiz_start.php") ;
?>
