<?php
session_start();
//Post array is empty or not
if(empty($_POST))
{exit;}	
$username=$_POST['username'];
$password=$_POST['password'];

$link=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("booking_system",$link) or die("can not select database");
$query= "select username,password from theatre_admin where username='$username'";
$result= mysql_query($query,$link) or die("wrong query");
$row = mysql_fetch_assoc($result);
if($row['username']==$username && $row['password']==$password)
		  {		  
		    $_SESSION['user']=$row['username'];
			$_SESSION['login']=1;
			header("location:home.php");
		  }
else      { echo "Invalid username and password";
			header("location:index.php");
	      }  	   
?>