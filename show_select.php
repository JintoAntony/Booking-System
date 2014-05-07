<?php

?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Online Movie Ticket Booking</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/style_form.css" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>
	
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
	
	
	<!---------------- Date Picker Files ------------>

<link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>



<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"date",
			dateFormat:"%y-%m-%d"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[2010,2040],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
	};
</script>

<!----------------------------------------------------->
	
	
	
</head>
<body>
<!-- wrapper -->
<div id="wrapper">
	<!-- shell -->
	<div class="shell">
		<!-- container -->
		<div class="container">
			<!-- header -->
			<header id="header">
				<h1 id="logo"><a href="#">Retina</a></h1>
				<!-- search -->
				<div class="search">
					<form action="" method="post">
						<input type="text" class="field" value="keywords here ..." title="keywords here ..." />
						<input type="submit" class="search-btn" value="" />
						<div class="cl">&nbsp;</div>
					</form>
				</div>
				<!-- end of search -->
				<div class="cl">&nbsp;</div>
			</header>
			<!-- end of header -->
			<!-- navigaation -->
			<nav id="navigation">
				<a href="#" class="nav-btn">HOME<span></span></a>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li class="active"><a href="booknow.php">Book Now</a></li>
					<li><a href="nowon.php">Now On</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
				</ul>
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
			<!-- slider-holder -->
			<div class="slider-holder">
				
				
			</div>

			<!-- main -->
			<div class="main">

				

				<section class="cols">
				
				
				   <div class="col">
						<h3>Our Services</h3>
						<ul>
							<li><a href="#">Content 1</a></li>
							<li><a href="#">Content 2 </a></li>
							<li><a href="#">Content 3</a></li>
							<li><a href="#">Content 4</a></li>
							<li><a href="#">Content 5</a></li>
						</ul>
					</div>
				
				
				    
				
					<div class="colm" align="center" style="margin-top:20px;">
					

					<form class="form" method="post" name="search" id="search" action="process_theatre.php" enctype="multipart/form-data">
					
					<label for="district">Select Date</label>
					<input type="text" size="12" id="date" name="date" "required"/>
					 
<?php
$theatre_id=$_GET['theatre_id'];
$movie_id=$_GET['movie_id'];

$conn=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("booking_system",$conn) or die("can not select database");
  
$query1="select * from movie where movie_theatre_id = '".$theatre_id."' and movie_id = '".$movie_id."'";
$result1 = mysql_query($query1,$conn)or die("wrong query"); 
  
while(($row1  = mysql_fetch_array($result1)))
{
 echo '<table cellspacing="0" style="width:80%">
					<tr>
				    <th>Movie Name</th>
					<th>Noon Show</th>
					<th>Matinee Show</th>
					<th>First Show</th>
					<th>Second Show </th>
					</tr>';
	    echo   '<tr>
			<td>'.$row1['movie_name'].'</td>';
			
			if($row1['movie_noon']!=0){
			echo'  <td><input type="radio" id="show" name="show" value="show_noon" style="width:15px;"> 
			</td>';}
			   else { echo '<td></td>';  }
			
			if($row1['movie_matinee']!=0){
			echo '  <td> <input type="radio" id="show" name="show" value="show_matinee" style="width:15px;">
			</td>';}
			    else { echo '<td></td>';  }
			
			if($row1['movie_firstshow']!=0){
			echo'  <td> <input type="radio" id="show" name="show" value="show_firstshow" style="width:15px;">
			</td>';}
			    else { echo '<td></td>';  }
			
			if($row1['movie_secondshow']!=0){
			echo' <td>  <input type="radio" id="show" name="show" value="show_secondshow" style="width:15px;">
			</td>';}
			else { echo '<td></td>';  }		
		echo 	'</table> <br/><br/>	
       <p class="submit">  
	      </p>'; 	
	   
	   
echo  '		<input type="hidden" name="theatre_id" id="theatre_id" value="'.$theatre_id.'">
			<input type="hidden" name="movie_id" id="movie_id" value="'.$movie_id.'">		
			
			<input type="submit" value="Next" id="submit" name="submit" style="margin-left:300px;" />  
			';	   
	   	   
	   
	  echo '</tr> ';	   
	}   
mysql_close($conn);	   
?>
           
	
			</form>
                    </div>
					
					<div class="cl">&nbsp;</div>
				</section>

				<br/><br/><br/>
				
				<section class="entries">
					
					<div class="entry">
						<h3>Movie 1</h3>
						<h5>Movie Name </h5>
						<a href="#"><img src="css/images/col-img2.png" alt="" /></a>
						<p>Movie Details<br /><a href="#" class="more">view more</a></p>
					</div>
					
					<div class="entry">
						<h3>Movie 2</h3>
						<h5>Movie Name </h5>
						<a href="#"><img src="css/images/col-img2.png" alt="" /></a>
						<p>Movie Details<br /><a href="#" class="more">view more</a></p>
					</div>
					
					<div class="entry">
						<h3>Movie 3</h3>
						<h5>Movie Name </h5>
						<a href="#"><img src="css/images/col-img2.png" alt="" /></a>
						<p>Movie Details<br /><a href="#" class="more">view more</a></p>
					</div>
					
					<div class="cl">&nbsp;</div>
				</section>
			</div>
			<!-- end of main -->
			<div class="cl">&nbsp;</div>
			
			<!-- footer -->
			<div id="footer">
				<div class="footer-nav">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Book Now</a></li>
						<li><a href="#">Now On</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact Us</a></li>
						
					</ul>
					<div class="cl">&nbsp;</div>
				</div>
				<p class="copy">&copy; Copyright 2013<span>|</span>spiderguts. Design by <a href="http://spiderguts.com" target="_blank">spiderguts.com</a></p>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- end of footer -->
		</div>
		<!-- end of container -->
	</div>
	<!-- end of shell -->
</div>
<!-- end of wrapper -->

</body>
</html>