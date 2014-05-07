<?php session_start();
$theatre_name=$_POST['theatre_name'];
$location=$_POST['location'];
$theatre_district=$_POST['theatre_district'];

$seat_secondclass=$_POST['seat_secondclass'];
$seat_firstclass=$_POST['seat_firstclass'];
$seat_balcony=$_POST['seat_balcony'];

$link=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("booking_system",$link) or die("can not select database");


/* $query1 = "insert into blood_request
 (request_patientname,request_patientdoctor,request_hospital,request_place,request_district,request_email,
 request_requiredon,request_bloodgroup,request_contactperson,request_contactno) values
			('{$patientname}','{$patientdoctor}','{$hospital}','{$place}','{$district}',
			'{$email}','{$requiredon}','{$bloodgroup}','{$contactperson}','{$contactno}');";	
*/
			
$query1="INSERT INTO `theatre` ( `theatre_name`, `theatre_district`, 
`theatre_location`, `theatre_secondclassseat`, `theatre_firstclassseat`, 
`theatre_balconyseat`) VALUES ('$theatre_name', '$theatre_district',
 '$location', '$seat_secondclass', '$seat_firstclass', '$seat_balcony');";			
						
$result1 = mysql_query($query1,$link); 
if (!$result1) 
{echo "Problem with query1 " ."<br/>"; } 
else
{
header("location:theatre_added.php");
}

/*
$theatre_id=$_SESSION['theatre_id'];
$query= "select theatre_id from theatre where theatre_id='$theatre_id'";
$result= mysql_query($query,$link) or die("wrong query");
$row = mysql_fetch_assoc($result);*/

?>
