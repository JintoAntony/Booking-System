<?php

?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Online Movie Ticket Booking</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>
	
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
	
	
	<!-- Slider Files ------------>
	
	<link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'> 
	
	<script type='text/javascript' src='js_slider/jquery.min.js'></script>
    <script type='text/javascript' src='js_slider/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='js_slider/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='js_slider/camera.min.js'></script> 
    
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: true
			});

			jQuery('#camera_wrap_2').camera({
				height: '400px',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			});
		});
	</script>
	
	<!--     End  ------------> 
	
	
	
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
					<li  class="active"><a href="index.php">Home</a></li>
					<li><a href="booknow.php">Book Now</a></li>
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

				

				
				
				
				<!-- Slider Content  ----------->

               <div class="fluid_container">
    	
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-thumb="images/slides/thumbs/bridge.jpg" data-src="images/slides/bridge.jpg">
                <div class="camera_caption fadeFromBottom">
                    Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
                </div>
            </div>
            <div data-thumb="images/slides/thumbs/leaf.jpg" data-src="images/slides/leaf.jpg">
                <div class="camera_caption fadeFromBottom">
                    It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
                </div>
            </div>
            <div data-thumb="images/slides/thumbs/road.jpg" data-src="images/slides/road.jpg">
                <div class="camera_caption fadeFromBottom">
                    <em>It's completely free</em> (even if a donation is appreciated)
                </div>
            </div>
           <!--  <div data-thumb="../images/slides/thumbs/sea.jpg" data-src="../images/slides/sea.jpg">
                <div class="camera_caption fadeFromBottom">
                    Camera slideshow provides many options <em>to customize your project</em> as more as possible
                </div>
            </div> -->
            
        </div>
</div>

<!----   Slider content End ---------------->		
                
					

					
					<div class="cl">&nbsp;</div>
				

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