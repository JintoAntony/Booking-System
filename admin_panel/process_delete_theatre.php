<?php session_start();

$link=mysql_connect("localhost","root","root")or die("can not linkect");
mysql_select_db("booking_system",$link) or die("can not select database");

$theatre_name=$_POST['theatre_name'];

$query = "DELETE FROM theatre WHERE theatre_name='$theatre_name'";
$result = mysql_query( $query, $link );

if($result)
{ 
header("location:theatre_deleted.php"); 
}
else
{ echo "Delete not possible"; }
?>
