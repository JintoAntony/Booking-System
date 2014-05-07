<?php session_start();
$current_movie=$_POST['current_movie'];
$new_movie=$_POST['new_movie'];
if(empty($_POST['noon_show']))
{$noon_show=0;}
else
{$noon_show=$_POST['noon_show'];}

if(empty($_POST['matinee_show']))
{$matinee_show=0;}
else
{$matinee_show=$_POST['matinee_show'];}

if(empty($_POST['first_show']))
{$first_show=0;}
else
{$first_show=$_POST['first_show'];}

if(empty($_POST['second_show']))
{$second_show=0;}
else
{$second_show=$_POST['second_show'];}

//$matinee_show=$_POST['matinee_show'];
//$first_show=$_POST['first_show'];
//$second_show=$_POST['second_show'];

$director=$_POST['director'];
$producer=$_POST['producer'];
$music=$_POST['music'];
$starring=$_POST['starring'];

$link=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("booking_system",$link) or die("can not select database");

$theatre_name=$_SESSION['user'];
$query= "select theatre_id from theatre where theatre_name='$theatre_name'";
$result= mysql_query($query,$link) or die("wrong query");
while($row = mysql_fetch_array($result))                                   
{$theatre_id=$row['theatre_id'];}

$movie_theatre_id=$theatre_id;
$query= "select movie_id from movie where 
movie_theatre_id='$movie_theatre_id'";
$result= mysql_query($query,$link) or die("wrong query");
while($row = mysql_fetch_array($result))                                   
{$movie_id=$row['movie_id'];}
 
/* $query1 = "insert into blood_request
 (request_patientname,request_patientdoctor,request_hospital,request_place,request_district,request_email,
 request_requiredon,request_bloodgroup,request_contactperson,request_contactno) values
			('{$patientname}','{$patientdoctor}','{$hospital}','{$place}','{$district}',
			'{$email}','{$requiredon}','{$bloodgroup}','{$contactperson}','{$contactno}');";	
*/
			
//$query1="INSERT INTO `movie` (`movie_theatre_id`, `movie_name`, `movie_noon`, 
//`movie_matinee`, `movie_firstshow`, `movie_secondshow`, `movie_director`, `movie_producer`, `movie_music`,
//`movie_starring`) VALUES ('1002', 'manja', '1', '1', '1', '1', 'Bijoy', 'Rammohan', 'Sejo', 'Niyas');";
 
$query1="update movie set 
movie_name='$new_movie',movie_noon='$noon_show',
movie_matinee='$matinee_show',movie_firstshow='$first_show',
movie_secondshow='$second_show',movie_director='$director',
movie_producer='$producer',movie_music='$music',
movie_starring='$starring'where movie_name='$current_movie'";

echo $query1;						
$result1 = mysql_query($query1,$link); 
if (!$result1) 
{echo "Problem with query1 " ."<br/>"; } 
 else
{header("location:movie_added.php");   }

/*
$theatre_id=$_SESSION['theatre_id'];
$query= "select theatre_id from theatre where theatre_id='$theatre_id'";
$result= mysql_query($query,$link) or die("wrong query");
$row = mysql_fetch_assoc($result);*/

?>
