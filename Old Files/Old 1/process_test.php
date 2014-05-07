<?php

$theatre_id="1000"; //$_POST['theatre_id'];

$link=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("booking_system",$link) or die("can not select database");
				
$query="select theatre_seat_booked from theatre where theatre_id = '".$theatre_id."'";
$result = mysql_query($query,$link)or die("wrong query");	

if($result)
{       while($row = mysql_fetch_array($result,MYSQLI_ASSOC))
		{	$booked=$row['theatre_seat_booked'].',';
		}
}
echo $booked;
echo "<br/>";						
				$booked_array = explode(",", $booked);
				/*---------------------------------------------------------------- */
				//Disply array
				for($i=0; $i<count($booked_array)-1; $i++) 
				{	echo $booked_array[$i]."\r\n";	
				}
				mysql_close($link);	
?>