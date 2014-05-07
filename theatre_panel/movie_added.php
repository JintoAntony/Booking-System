<?php session_start();
if(!$_SESSION['login'])
header("location:index.php");
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
		 <span class="heading">Online</span> Movie Ticket Booking
		 </div> <br/><br/>
	     <span style="color:rgb(185, 34, 34);font-size:21px;margin-left:40px;">New Movie added</span>       
         <div class="clear"></div>   
    </div>    
   
    <div id="footer">                                              
    <div class="left_footer">
    <a href="home.php">Home</a>    
    </div>
      
</div>
<!-- end of main_container -->

</body>
</html>