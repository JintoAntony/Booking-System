<?php

$show_theatre_id=$_POST['theatre_id'];
$show_movie_id=$_POST['movie_id'];
$show_date_id=$_POST['date'];
$show=$_POST['show'];


$link=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("booking_system",$link) or die("can not select database");
$query = "select theatre_name FROM `theatre` WHERE theatre_id='$show_theatre_id'
";
$result = mysql_query($query,$link)or die("wrong query");
if($result)
{    
$row = mysql_fetch_array($result,MYSQLI_ASSOC);
if($row['theatre_name']=="girija")
{header("location:theatre_girija.php?show_theatre_id=$show_theatre_id&&show_movie_id=$show_movie_id&&show_date_id=$show_date_id&&show=$show");}		
if($row['theatre_name']=="ramdas")
{header("location:theatre_ramdas.php?show_theatre_id=$show_theatre_id&&show_movie_id=$show_movie_id&&show_date_id=$show_date_id&&show=$show");}		



}
mysql_close($link);
?>