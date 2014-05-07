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
			     <span class="heading">Online</span> Movie Ticket Booking Control Panel
		 </div> <br/><br/>
    
	     <span style="color:rgb(185, 34, 34);font-size:21px;margin-left:40px;">Change Movie </span>
     	
        <form class="form" method="post" name="edit" id="edit" action="process_update_movie.php" enctype="multipart/form-data">  
								  
							<p class="name">  
								<label for="name">Current Movie</label> &nbsp;&nbsp;
								<input type="text" name="current_movie" id="current_movie" > <!--value="">   <?php //$row['current_movie']?>-->
										  
							</p> <br/> 

                             
							<p class="name" style="margin-left:15px;">  
								<label for="name">New Movie</label> &nbsp;&nbsp;
								<input type="text" name="new_movie" id="new_movie">  
										  
							</p> <br/> 
							
							<p class="name">  
								<label for="name" style="margin-left:255px;">Available Shows</label> &nbsp;&nbsp;
							    
								<input type="checkbox" style="width:15px;" id="noon_show" name="noon_show" value="1">
								<span style="color:black;font-size:12px;text-align:justify;line-height: 20px;">Noon Show</span>
							
							    <input type="checkbox" style="width:15px;margin-left:40px;" id="matinee_show" name="matinee_show" value="1">
								<span style="color:black;font-size:12px;text-align:justify;line-height: 20px;">Matinee Show</span><br/><br/>
								
								<input type="checkbox" style="width:15px;margin-left:359px;" id="first_show" name="first_show" value="1">
								<span style="color:black;font-size:12px;text-align:justify;line-height: 20px;">First Show</span>
								
								<input type="checkbox" style="width:15px;margin-left:47px;" id="second_show" name="second_show" value="1">
								<span style="color:black;font-size:12px;text-align:justify;line-height: 20px;">Second Show</span>
							
							</p></br/>	
								
							
							<p class="name" style="margin-left:29px;">  
								<label for="name">Director</label> &nbsp;&nbsp;
								<input type="text" name="director" id="director">  
										  
							</p> <br/> 
							
							<p class="name" style="margin-left:23px;">  
								<label for="name">Producer</label> &nbsp;&nbsp;
								<input type="text" name="producer" id="producer">  
										  
							</p> <br/> 
							
							<p class="name" style="margin-left:23px;">  
								<label for="name">Music By</label> &nbsp;&nbsp;
								<input type="text" name="music" id="music">  
										  
							</p> <br/> 
							
							<p class="name" style="margin-left:23px;">  
								<label for="name">Starring</label> &nbsp;&nbsp;
								<input type="text" name="starring" id="starring">  
										  
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
			
       
    </div>
    
    
    
</div>
<!-- end of main_container -->

</body>
</html>