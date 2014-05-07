<?php


?>



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Movie Ticket Booking</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="images/icon.ico" />
</head>

<body>
<div id="headerbg">
  <div id="headerblank">
    <div id="header">
	

	<img src="images/logos.png" style="padding-top:40px;width:200px;height:75px;">
	
      <div id="menu">
        <ul>
          <li><a href="index.php" class="menu">Home</a></li>
          <li><a href="book_ticket.php" class="menu">Book Now</a></li>
          <li><a href="now_on_theater.php" class="menu">Now On</a></li>
          <li><a href="about.php" class="menu">About Us</a></li>
          <li><a href="contact_us.php" class="menu">Contact Us</a></li>
        </ul>
      </div>

    </div>
  </div>
</div>
<div id="contentbg">
  <div id="contentblank">
    <div id="content">
      
	  
	  <div id="contentleft">
        <div id="leftheading">
          <h4>News &amp; Updates</h4>
        </div>
        <div class="lefttxtblank">
          <div class="lefticon">16</div>
          <div class="leftboldtxtblank">
            <div class="leftboldtxt">Rough Content</div>
            <div class="lefttxt">Rough Content</div>
          </div>
          <div class="leftnormaltxt">Rough Content</div>
          <div class="morebutton"><a href="#" class="more">read more... </a></div>
        </div>
        <div class="lefttxtblank02">
          <div class="lefticon">16</div>
          <div class="leftboldtxtblank">
            <div class="leftboldtxt">Rough Content</div>
            <div class="lefttxt">Rough Content</div>
          </div>
          <div class="leftnormaltxt">Rough Content</div>
          <div class="morebutton"><a href="#" class="more">Rough Content</a></div>
        </div>
        <div class="lefttxtblank02">
          <div class="lefticon">16</div>
          <div class="leftboldtxtblank">
            <div class="leftboldtxt">Rough Content</div>
            <div class="lefttxt">Rough Content</div>
          </div>
          <div class="leftnormaltxt">Rough Content</div>
          <div class="morebutton"><a href="#" class="more">read more... </a></div>
        </div>
        
		
		<div id="leftnavheading">
          <h4>Resources</h4>
        </div>
       
	   <div id="leftnav">
          <ul>
            <li><a href="#" class="leftnav">Rough Content</a></li>
            <li><a href="#" class="leftnav">Rough Content </a></li>
            <li><a href="#" class="leftnav">Rough Content</a></li>
            <li><a href="#" class="leftnav">Rough Content</a></li>
            <li><a href="#" class="leftnav">Rough Content</a></li>
            <li><a href="#" class="leftnav">Rough Content</a></li>
            <li><a href="#" class="leftnav">Rough Content</a></li>
            <li><a href="#" class="leftnav">Rough Content</a></li>
            <li><a href="#" class="leftnav">Rough Content</a></li>
            <li><a href="#" class="leftnav">Rough Content</a></li>
          </ul>
        </div> 
      </div>
      
	  
	  <div id="contentmid">
        <div class="midheading">
          <h2>Search For Theater</h2>
        </div>
       <!-- <div class="midtxt">
		<span class="midboldtxt">Nulla eget lacus ac duidictum ellentesque dapibus nibh ornare</span><br />
          volutpat, diam leo vestibulum lectus, eu molestie elit est eu ipsum. Ut accumsan nisl eu velit. Morbi eros felis, 
		  ornare sed, vestibulum cursus, vehicula et, nisl. Etiam adipiscing. </div>
        <div id="comments">
          <div id="addcomments"><a href="#" class="addcomments">Add Commend</a></div>
          <div id="morecomments"><a href="#" class="morecomments">read more</a></div>
        </div>-->
		<br/><br/><br/><br/><br/>
		
		<div id="search_form">
        
               <form method="post" name="search" id="search" action="process_search.php" enctype="multipart/form-data">
			   
			        
					<label for="subject">Enter Name Of Theater:</label>
                    <input type="text" name="name" placeholder="Enter name of Theater" class="validate-subject required input_field" required>
                    <div class="cleaner h10"></div> 	<br/><br/>
		
		            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				    <label for="subject">Select District:</label>
					<select id="district" name="district" class="validate-subject required input_field">
					<option value="" selected="selected">--Select--</option>
					<option value="Alappuzha">Alappuzha</option>
					<option value="Eranakulam ">Eranakulam </option>
					<option value="Idukki">Idukki</option>
					<option value="Kannur">Kannur</option>
					<option value="Kasaragod ">Kasaragod </option>
					<option value="Kollam">Kollam</option>
					<option value="Kottayam">Kottayam</option>
					<option value="Kozhikode">Kozhikode</option>
					<option value="Malappuram">Malappuram</option>
					<option value="Palakkad">Palakkad</option>
					<option value="Pathanamthitta">Pathanamthitta</option>
					<option value="Thiruvananthapuram ">Thiruvananthapuram </option>
					<option value="Thrissur">Thrissur</option>
					<option value="Wayanad">Wayanad</option>
					</select>
					<div class="cleaner h10"></div><br/><br/>
		
                <input type="submit" value="Search" id="submit" name="submit" class="submit_btn float_l" />
				
				</form>
		

      <!--  <div class="midheading">
          <h2>Our main purpose</h2>
        </div> -->
       
	   
	   
	   </div>
	   
	   </div>
	   
	   </div>
  </div>
</div>


<div id="footerbg">
  <div id="footerblank">
    <div id="footer">
      <div id="footerbox">
        <div class="footerheading"><h4>Movie 1</h4></div>
        <div class="footertxt">Rough Content.</div>
        <div class="footerbutton"><a href="#" class="button">read more</a></div>
      </div>
      <div id="footermid"><div class="footerheading"><h4>Movie 2</h4></div>
      <div class="footertxt">Rough Content.</div>
      <div class="footerbutton"><a href="#" class="button">read more</a></div>
      </div>
      <div id="footerlast">
        <div class="footerheading">
          <h4>Movie 3</h4>
        </div>
        <div class="footertxt">Rough Content.</div>
        <div class="footerbutton"><a href="#" class="button">read more</a></div>
      </div>
      <div id="footerlinks"><a href="#" class="footerlinks">Home</a> | <a href="#" class="footerlinks">Book Ticket</a> | <a href="#" class="footerlinks">Now</a> | 
	  <a href="#" class="footerlinks">About Us</a> | <a href="#" class="footerlinks">Contact Us</a> 
	  
	  
      <div id="copyrights">© Copyright spiderguts. All Rights Reserved.</div>
      <div id="designedby">Designed by <a href="http://www.spiderguts.com" target="_blank" class="designedby">Spiderguts</a> </div>
      
    </div>
  </div>
</div>
</div>

</body>
</html>
