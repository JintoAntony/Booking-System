<?php

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
                <li><a href="update_movie.php">Update Movie</a></li>
                <li><a href="update_theatre_details.php">Update Theatre Details</a></li>
                <li  class="selected"><a href="contactus.php">Contact Us</a></li>
        	</ul>
        	</ul>
        </div>
        
    <div class="content_form">
	
	     <div class="title_welcome">
			     <span class="heading">Online</span> Movie Ticket Booking Control Panel
		 </div> <br/><br/>
    
	     <span style="color:rgb(185, 34, 34);font-size:21px;margin-left:40px;">Change Movie </span>
     	
           
		   <form class="form" name="contactus" id="contactus" method="post" enctype="multipart/form-data" action="process_contactus.php">  
								  
									<p class="name" style="margin-left:64px;">
										<label for="name">Name</label>&nbsp;&nbsp;
										<input type="text" name="name" id="name" required/>  
										  
									</p>  <br/>
								  
									<p class="email" style="margin-left:58px;">  
										<label for="email">E-mail</label> &nbsp;&nbsp;
										<input type="email" name="email" id="email" required/>  
										 
									</p>  <br/>
								  
									<p class="web" style="margin-left:10px;"> 
										<label for="web">Mobile Number</label> &nbsp;&nbsp;
										<input type="text" name="mobno" id="mobno" required/>  
										  
									</p>  <br/>
								  
									<p class="text" style="margin-left:60px;">  
										<label for="name">Query</label>	&nbsp;&nbsp;									
										<textarea name="query" id="query" required></textarea>  
									</p>  <br/><br/>
								  
									<p class="submit" style="margin-left:458px;">										
									<input type="submit" value="Send" name="send" id="send" />  
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
        