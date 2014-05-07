<?php session_start();

$link=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("booking_system",$link) or die("can not select database");

$theatre_name=$_SESSION['user'];
$query= "select theatre_id from theatre where theatre_name='$theatre_name'";
$result= mysql_query($query,$link) or die("wrong query1");
while($row = mysql_fetch_array($result))                                   
{
$theatre_id=$row['theatre_id'];
}

//$theatre_id=$_SESSION['theatre_id'];

$firstclass=$_POST['first_class'];
$secondclass=$_POST['second_class'];
$balcony=$_POST['balcony'];
echo $theatre_id;
echo $firstclass;
echo $secondclass;
echo $balcony;

// Update Query
//$query1= "select theatre_id from theatre where theatre_id='$theatre_id'";
//$result1= mysql_query($query,$link) or die("wrong query");
//$row = mysql_fetch_assoc($result1);

$query1="update theatre set theatre_firstclassseat='$firstclass',
theatre_secondclassseat='$secondclass',
theatre_balconyseat='$balcony'
 where theatre_id='$theatre_id'";
echo $query1;
$result1=  mysql_query($query1,$link);
if($result1)
{
header("location:home.php");
}

?>