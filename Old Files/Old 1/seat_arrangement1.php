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
				for($i=1;$i<=count($booked_array)-2; $i++) 
				{	echo $booked_array[$i]."\r\n";	
				}
				mysql_close($link);	
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<body>	
<form method="post" name="search" id="search" action="process_seat.php" enctype="multipart/form-data">		  
<?php 
echo "<br/>";
echo "<br/>";
for($j=1;$j<=40;$j++)
{
for($i=1;$i<=count($booked_array)-2;$i++)
{
		if($booked_array[$i]=="0")
		continue;
		else
		{if($j == $booked_array[$i])
		{echo '<input type="checkbox" value="true" id="';		
		echo 'seat'.$j;
		echo '" name="';
		echo 'seat'.$j;
		echo ' " disabled>';
		echo 'seat'.$j;
		$set=1;
		}}
}
		if($set=="1")
		{$set=0;
		continue;}
		else
		{echo '<input type="checkbox" value="true" id="';		
		echo 'seat'.$j;
		echo '" name="';
		echo 'seat'.$j;
		echo '" >';	echo 'seat'.$j;
		$set=0;}
}

echo '<input type="submit" value="Next >" id="submit" name="submit" class="submit_btn float_l" />';
?>
</form>
</body>
</html>
