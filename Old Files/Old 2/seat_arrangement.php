<?php

$show_theatre_id="1000"; //$_POST['theatre_id'];
$show_movie_id="1000";   //$_POST['movie_id'];
$show_date_id="1000";    //$_POST['date_id'];
$show="show_noon";            //$_POST['show'];

$link=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("booking_system",$link) or die("can not select database");
				
$query="select '".$show."' from show where (show_theatre_id = '".$show_theatre_id."' 
and show_movie_id = '".$show_movie_id."' and show_date_id = '".$show_date_id."'
)";

$result = mysql_query($query,$link)or die("wrong query");	

if($result)
{       while($row = mysql_fetch_array($result,MYSQLI_ASSOC))
		{	$booked=$row['theatre_seat_booked'].',';
		}
}
//echo $booked;
echo "<br/>";						
				$booked_array = explode(",", $booked);
				/*---------------------------------------------------------------- */
				//Disply array
				/*for($i=0; $i<count($booked_array)-1; $i++) 
				{	echo $booked_array[$i]."\r\n";	
				}*/
				mysql_close($link);	
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
        <h2>Select Your Seat Position</h2>
      </div>      
		  <br/><br/><br/>		
		  <div id="search_form">		
		  <form method="post" name="search" id="search" action="process_seat.php" enctype="multipart/form-data">		  
		 		  
<?php 
$newline=0;
for($j=1;$j<=40;$j++)
{
for($i=1;$i<=count($booked_array)-2;$i++)
{
		if($booked_array[$i]=="0")
		continue;
		else
		{if($j == $booked_array[$i])
		{echo '<input type="checkbox" value="true" id="';		
		echo 'seat'.$j;
		echo '" name="';
		echo 'seat'.$j;
		echo ' " disabled>';
		//echo 'seat'.$j;
		$set=1;
		//add new line here
		$newline++;
		if(($newline%10)==0)
		{echo '<br/>';}
		else
		continue;		
		}}
}
		if($set=="1")
		{$set=0;
		continue;}
		else
		{echo '<input type="checkbox" value="true" id="';		
		echo 'seat'.$j;
		echo '" name="';
		echo 'seat'.$j;
		echo '" >';	
		//echo 'seat'.$j;
		$set=0;
		//add new line here
		$newline++;
		if(($newline%10)==0)
		{echo '<br/>';}
		else
		continue;
		
		}
}
?>		
.................................................
<?php 
echo "<br/>";
for($j=41;$j<=80;$j++)
{
for($i=1;$i<=count($booked_array)-2;$i++)
{
		if($booked_array[$i]=="0")
		continue;
		else
		{if($j == $booked_array[$i])
		{echo '<input type="checkbox" value="true" id="';		
		echo 'seat'.$j;
		echo '" name="';
		echo 'seat'.$j;
		echo ' " disabled>';
		//echo 'seat'.$j;
		$set=1;
		//add new line here
		$newline++;
		if(($newline%10)==0)
		{echo '<br/>';}
		else
		continue;
		}}
}
		if($set=="1")
		{$set=0;
		continue;}
		else
		{echo '<input type="checkbox" value="true" id="';		
		echo 'seat'.$j;
		echo '" name="';
		echo 'seat'.$j;
		echo '" >';	
		//echo 'seat'.$j;
		$set=0;
		//add new line here
		$newline++;
		if(($newline%10)==0)
		{echo '<br/>';}
		else
		continue;		
		}
}
?>
.................................................
<?php 
echo "<br/>";
for($j=81;$j<=120;$j++)
{
for($i=1;$i<=count($booked_array)-2;$i++)
{
		if($booked_array[$i]=="0")
		continue;
		else
		{if($j == $booked_array[$i])
		{echo '<input type="checkbox" value="true" id="';		
		echo 'seat'.$j;
		echo '" name="';
		echo 'seat'.$j;
		echo ' " disabled>';
		//echo 'seat'.$j;
		$set=1;
		//add new line here
		$newline++;
		if(($newline%10)==0)
		{echo '<br/>';}
		else
		continue;
		}}
}
		if($set=="1")
		{$set=0;
		continue;}
		else
		{echo '<input type="checkbox" value="true" id="';		
		echo 'seat'.$j;
		echo '" name="';
		echo 'seat'.$j;
		echo '" >';	
		//echo 'seat'.$j;
		$set=0;
		//add new line here
		$newline++;
		if(($newline%10)==0)
		{echo '<br/>';}
		else
		continue;
		}
}
?>			
		<input type="submit" value="Next >" id="submit" name="submit" class="submit_btn float_l" />		
		</form>
		
			
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
