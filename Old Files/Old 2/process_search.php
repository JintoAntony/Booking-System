
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TemplateWorld - Artificial Casting</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="images/icon.ico" />
</head>

<body>
<div id="headerbg">
  <div id="headerblank">
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
          <h2>Theater Details</h2>
        </div>
      
		<br/><br/><br/><br/><br/>
		
		

      <!--  <div class="midheading">
          <h2>Our main purpose</h2>
        </div> -->
       
	   <table width="95%" cellpadding="5" cellspacing="0" style="text-align:center; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:14px;" border="1">
       <tr>
         <td width="30%" align="center" bgcolor="#CFCAB9;" style="border-right:none; border-bottom:none;"><p>Theater Name</p></td>
         <td width="20%" align="center" bgcolor="#CFCAB9;" style="border-right:none; border-bottom:none;"><p>Location</p></td>
		 <td width="30%" align="center" bgcolor="#CFCAB9;" style="border-right:none; border-bottom:none;"><p>Films</p></td>
         <td width="20%" align="center" bgcolor="#CFCAB9;" style="border-right:none; border-bottom:none;"><p>Book Now</p></td>
		
	   </tr>
	   
	   
	   
	<?php

	
	  $movie=$_POST['name'];
	  
	  $district=$_POST['district'];
	  
	  $conn=mysql_connect("localhost","root","root")or die("can not connect");
	  mysql_select_db("booking_system",$conn) or die("can not select database");
	  
	  $query1="select * from theatre where theatre_district = '".$district."'";
      $result1 = mysql_query($query1,$conn)or die("wrong query");
	  
	  $query2="select * from movie where movie_name = '".$movie."'";
      $result2 = mysql_query($query2,$conn)or die("wrong query");
	  
	  if($result1||$result2)
	  {
	  
	  echo  '<tr>
	    <td><span style="font-size:14px">Bhavana</span></td>
	    <td><span style="font-size:14px">Kunnamkulam</span></td>
		
		<td>
		<table width="95%" cellpadding="5" cellspacing="0" style="text-align:center; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:14px;" border="0">
		<tr><td><span style="font-size:14px">Manja</span></td><tr/>
		<tr><td><span style="font-size:14px">Jilla</span></td><tr/>
		</table>
		</td>
		
		<td>
		<table width="95%" cellpadding="5" cellspacing="0" style="text-align:center; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:14px;" border="0">
		<tr><td><input type="button" name="book" id="book" value="Book now"></td><tr/>
		<tr><td><input type="button" name="book" id="book" value="Book now"></td><tr/>
		</table>
		</td>
		
	   </tr>
	   
	     <tr>
	    <td><span style="font-size:14px">Balakrishna</span></td>
	    <td><span style="font-size:14px">Guruvayoor</span></td>
		
		<td>
		<table width="95%" cellpadding="5" cellspacing="0" style="text-align:center; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:14px;" border="0">
		<tr><td><span style="font-size:14px">Drishyam</span></td><tr/>
		<tr><td><span style="font-size:14px">Memories</span></td><tr/>
		</table>
		</td>
		
		<td>
		<table width="95%" cellpadding="5" cellspacing="0" style="text-align:center; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:14px;" border="0">
		<tr><td><input type="button" name="book" id="book" value="Book now"></td><tr/>
		<tr><td><input type="button" name="book" id="book" value="Book now"></td><tr/>
		</table>
		</td>
		
	   </tr>';
	   
}	   
	   
	   ?>
	   
	     
	   
	   
	  </table>
	   
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
