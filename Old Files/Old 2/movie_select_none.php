<?php


?>



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
          <h2>Select Show Time</h2>
        </div>
     
		<br/><br/><br/><br/><br/>
		
		<div id="theater">

      
       
	   <table width="95%" cellpadding="5" cellspacing="0" style="text-align:center; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:14px;" border="1">
       <tr>
         <td width="40%" align="center" bgcolor="#CFCAB9;" style="border-right:none; border-bottom:none;"><p>Movie Name</p></td>
         <td width="15%" align="center" bgcolor="#CFCAB9;" style="border-right:none; border-bottom:none;"><p>Noon Show</p></td>
		 <td width="15%" align="center" bgcolor="#CFCAB9;" style="border-right:none; border-bottom:none;"><p>Matinee Show</p></td>
		 <td width="15%" align="center" bgcolor="#CFCAB9;" style="border-right:none; border-bottom:none;"><p>First Show</p></td>
         <td width="15%" align="center" bgcolor="#CFCAB9;" style=" border-bottom:none;"><p>Second Show</p></td>
		
	   </tr>
	   
	    <form method="post" name="movie_select" id="movie_select" action="process_movie_select.php" enctype="multipart/form-data">
	   
	   
	   <tr>
	    <td><span style="font-size:14px">Manja</span></td>
	    <td><input type="radio" id="manja" name="manja" value="noonshow"></td>
	    <td><input type="radio" id="manja" name="manja" value="matineeshow"></td>
		<td><input type="radio" id="manja" name="manja" value="firstshow"></td>
		<td><input type="radio" id="manja" name="manja" value="secondshow"></td>
	   </tr>
	   
	    <tr>
	    <td><span style="font-size:14px">Jilla</span></td>
	    <td><input type="radio" id="jilla" name="jilla" value="noonshow"></td>
	    <td><input type="radio" id="jilla" name="jilla" value="matineeshow"></td>
		<td><input type="radio" id="jilla" name="jilla" value="firstshow"></td>
		<td><input type="radio" id="jilla" name="jilla" value="secondshow"></td>
	   </tr>
	   
</table>  <br/>


<a href="process_search.php"><input type="button" value="Back" id="submit" name="submit" class="submit_btn_l" style="margin-left:25px;"/>

 <input type="submit" value="Next >" id="submit" name="submit" class="submit_btn_l" />
 
 </form>
 
 
	   
	   </div>
	   </div>
	   
	   
      <div id="contentright">
        <div class="rightheading">
          <h4>Photo Gallery</h4>
        </div>
        <div id="galleryblank">
          <div id="rightpic"><a href="#" class="rightpic"></a></div>
          <div id="rightpic02"><a href="#" class="rightpic02"></a></div>
          <div id="rightpic03"><a href="#" class="rightpic03"></a></div>
          <div class="viewbutton"><a href="#" class="view"> view more</a></div>
          <div class="rightheading">
            <h4>Creative story</h4>
          </div>
          <div class="righttxt"><span class="rightboldtxt">01. aliquet tempor nisi tellus </span>bibendum nunc. Sed venenatis scelerisque ipsum.</div>
          <div class="righttxt"><span class="rightboldtxt">02.  Tempor nisi tellus </span><br />
            Ndum nunc. Sed venenatis scelerisque ipsum.</div>
          <div class="righttxt"><span class="rightboldtxt">03.  Kempor sisi vellus </span><br />
            Qchdum nunc. Sed venenatis scelerisque ipsum.</div>
          <div class="righttxt"><span class="rightboldtxt">04. Aliquet tempor nisi tellus </span>bibendum nunc. Sed venenatis</div>
          <div class="viewbuttonbot"><a href="#" class="view"> read more</a></div>
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
