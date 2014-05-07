<?php session_start();
if(!$_SESSION['login'])
header("location:index.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Online Ticket Reserving System</title>
<link rel="stylesheet" type="text/css" href="css/style_admin.css" />
</head>
<body>

<div id="main_container">
	<div id="header">
    	<div class="logo"><img src="images/logos.png" style="width:229px;height:94px;" border="0" alt="" title="" /></div>       
    </div>
        <div class="menu">
        	<ul>                                                                         
        		<li class="selected"><a href="home.php">Home</a></li>
                <li><a href="add_theatre.php">Add Theatre</a></li>
                <li><a href="delete_theatre.php">Delete Theatre</a></li>
                <li><a href="logout.php">Logout</a></li>
        	</ul>
        </div>
        
    <div class="content_form">
    
     	
        	<div class="title_welcome">
			    Online Movie Ticket Booking Admin Panel</div>
            
			<div class="welcome_box">
            <p class="welcome">
            <span class="orange">You are in admin panel</span><br />
			</p>
                   
            </div>
         <br/><br/><br/>
		 
		 <!--
         <div class="features">   
            <div class="title">Main features</div>
            
                    <ul class="list">
                    <li><span>1</span><a href="#">Rough Content 1</a></li>
                    <li><span>2</span><a href="#">Rough Content 2</a></li>
                    <li><span>3</span><a href="#">Rough Content 3</a></li>
                    <li><span>4</span><a href="#">Rough Content 4</a></li>
                    </ul> 
         </div> 
         -->
		 
         <div class="features">   
            <div class="title">	<!-- --></div>
                <div class="news_box">
                    <div class="news_icon"></div>
                    <div class="news_content">
                 
				<!-- -->
                    </div>   
                </div>
                <div class="news_box">
                    <div class="news_icon"></div>
                    <div class="news_content">
             	<!-- -->       
                    </div>   
                </div>       

         </div> 
         
         
           
            
            
      
        
        
        
        
        <div class="clear"></div> 
    
    </div>    

    
    <div id="footer">                                              
        <div class="left_footer">
		 <a href="home.php">Home</a> 
		</div>
       
    </div>
    
    
    
</div>
<!-- end of main_container -->

</body>
</html>