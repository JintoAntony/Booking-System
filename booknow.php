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
					<li  class="active"><a href="booknow.php">Book Now</a></li>
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
				
				
					<div class="colm" style="margin-top:70px;margin-right:55px;">
					
					   
						
						<form class="form" method="post" name="search" id="search" action="process_search.php" enctype="multipart/form-data">  
								  
							<p class="name">  
								<label for="name">Movie Name</label> &nbsp;&nbsp;
								<input type="text" name="movie_name" id="movie_name">  
										  
							</p> <br/> 

                            <p class="name" style="margin-left:35px;">  
								<label for="district">District</label> &nbsp;
								<select id="theatre_district" name="theatre_district" required>
									
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
										  
							</p> 
							
								  
							<br/> <br/>		  
								  
							<p class="submit">  
								<input type="submit" value="Search" id="submit" name="submit" style="margin-left:300px;" />  
							</p>  
								  
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