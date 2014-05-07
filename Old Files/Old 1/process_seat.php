<?php

$theatre_id="1000"; //$_POST['theatre_id'];

$insert=0;
for($i=1;$i<=120;$i++)
{
if(!empty($_POST['seat'.$i]))
{
$insert=$insert.','.$i;
}
}
echo $insert;
//will be moved after the payment completed page later
$link=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("booking_system",$link) or die("can not select database");

$query="select theatre_seat_booked from theatre where theatre_id = '".$theatre_id."'";
$result = mysql_query($query,$link)or die("wrong query");
if($result)
{       while($row = mysql_fetch_array($result,MYSQLI_ASSOC))
		{
		$booked=$row['theatre_seat_booked'].',';
		}
}
echo $booked;
$insert=$booked.$insert;
echo $insert;
$query1="update theatre set theatre_seat_booked='$insert' where theatre_id='$theatre_id'";
$result1=  mysql_query($query1,$link);

mysql_close($link);
?>