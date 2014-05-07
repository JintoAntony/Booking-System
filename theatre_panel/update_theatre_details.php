<?php session_start();

$link=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("booking_system",$link) or die("can not select database");

$theatre_name=$_SESSION['user'];
echo $theatre_name;
$query= "select theatre_id from theatre where theatre_name='$theatre_name'";
$result= mysql_query($query,$link) or die("wrong query1");
while($row = mysql_fetch_array($result))                                   
{
$theatre_id=$row['theatre_id'];
}
echo $theatre_id;

$query1= "select theatre_secondclassseat,theatre_firstclassseat,theatre_balconyseat from theatre where theatre_id='$theatre_id'";
$result1= mysql_query($query1,$link) or die("wrong query2");
$row = mysql_fetch_assoc($result1);

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Online Ticket Reserving System</title>
<link rel="stylesheet" type="text/css" href="css/style_admin.css" />
<link rel="stylesheet" href="css/style_form.css" type="text/css" media="all" />
</head>
<body>

<div id="main_container">
	<div id="header">
    	<div class="logo"><img src="images/logos.png" style="width:229px;height:94px;" border="0" alt="" title="" /></div>       
    </div>
        <div class="menu">
        	<ul>                                                                         
        		<ul>                                                                         
        		<li><a href="home.php">Home</a></li>
                <li class="selected"><a href="update_movie.php">Update Movie</a></li>
                <li><a href="update_theatre_details.php">Update Theatre Details</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
				<li><a href="logout.php">Logout</a></li>
        	</ul>
        	</ul>
        </div>
        
    <div class="content_form">
	
	     <div class="title_welcome">
			     <span class="heading">Online</span> Movie Ticket Booking Control Panel
		 </div> <br/><br/>
    
	     <span style="color:rgb(185, 34, 34);font-size:21px;margin-left:40px;">Change Movie </span>
     	
        <form class="form" method="post" name="edit" id="edit" action="process_update_theatre_details.php" enctype="multipart/form-data">  
								  
							<p class="name" style="margin-left:20px;">  
								<label for="name">First Class Ticket Number</label> &nbsp;&nbsp;
								<input type="text" name="first_class" id="first_class" value="<?php echo $row['theatre_firstclassseat']; ?>">  
										  
							</p> <br/> 

                             
							<p class="name">  
								<label for="name">Second Class Ticket Number</label> &nbsp;&nbsp;
								<input type="text" name="second_class" id="second_class" value="<?php echo $row['theatre_secondclassseat']; ?>">  
										  
							</p> <br/> 
							
							<p class="name" style="margin-left:33px;">  
								<label for="name">Balcony Ticket Number</label> &nbsp;&nbsp;
								<input type="text" name="balcony" id="balcony" value="<?php echo $row['theatre_balconyseat']; ?>">  
										  
							</p> <br/> 
							
							
								  
							<br/> <br/>		  
								  
							<p class="submit">  
								<input type="submit" value="Update" id="submit" name="submit" style="margin-left:520px;" />  
							</p>  
								  
								</form> 
        
       
        
        <div class="clear"></div> 
    
    </div>    

    
    <div id="footer">                                              
        <div class="left_footer">
		    <a href="home.php">Home</a> 
			<a href="update_movie.php">Update Movie</a> 
			<a href="update_theatre_details.php">Update Theatre Details</a>
			<a href="contactus.php">Contact Us</a>
	    </div>
    </div>
    
    
    
</div>
<!-- end of main_container -->

</body>
</html>