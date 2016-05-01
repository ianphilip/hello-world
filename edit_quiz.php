<html>
<body>
<?php
include('inlcudes/db_conn.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$age=$_POST['age'];
$query3=mysql_query("update addd set name='$name', age='$age' where id='$id'");
if($query3)
{
header('location:list.php');
}
}
$query1=mysql_query("select * from addd where id='$id'");
$query2=mysql_fetch_array($query1);
?>
<form method="post" action="">
Name:<input type="text" name="name" value="<?php echo $query2['name']; ?>" /><br />
Age:<input type="text" name="age" value="<?php echo $query2['age']; ?>" /><br /><br />
<br />
<input type="submit" name="submit" value="update" />
</form>
<?php
}
?>
</body>
</html>