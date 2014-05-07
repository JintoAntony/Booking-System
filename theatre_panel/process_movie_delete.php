<?php session_start();

$link=mysql_connect("localhost","root","root")or die("can not linkect");
mysql_select_db("booking_system",$link) or die("can not select database");

$id=$_GET['id'];
$query = "DELETE FROM movie WHERE movie_id='$id'";
$result = mysql_query( $query, $link );

if($result)
{ //header("location:movie_deleted.php"); 
}
else
{ echo "Delete not possible"; }
?>
