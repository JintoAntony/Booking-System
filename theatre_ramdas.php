<?php

$show_theatre_id=$_GET['show_theatre_id'];
echo $show_theatre_id;
$show_movie_id=$_GET['show_movie_id'];
echo $show_movie_id;
$show_date_id=$_GET['show_date_id'];
echo $show_date_id;
$show=$_GET['show'];

$go=0;
$link=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("booking_system",$link) or die("can not select database");
//----------------------------------------------------------------------------
if($show=="show_noon")
{
$show="show_noon";
echo $show;
//$query="select show_noon from show where show_theatre_id ='$show_theatre_id' ";
//and show_date_id = '".$show_date_id."'
$query = "select show_noon FROM `show` WHERE show_theatre_id='$show_theatre_id'
and show_movie_id='$show_movie_id' and show_date_id='$show_date_id'

";
echo $query;
$result = mysql_query( $query, $link );
echo $result;
if($result)
{   
    echo "inside if<br/>";
    while($row = mysql_fetch_array($result,MYSQLI_ASSOC))
		{  	
			echo "inside while<br/>";
			$booked=$row['show_noon'].',';
			echo $booked;
			$go=1;
		}
}
if($go=="0")
		{
			//create a query with date if there is no query with this date exist
			$query1="INSERT INTO `booking_system`.`show` (`show_id`, `show_theatre_id`, `show_movie_id`, `show_date_id`,
			`show_noon`, `show_matinee`, `show_firstshow`, `show_secondshow`)
			VALUES (NULL, '$show_theatre_id', '$show_movie_id', '$show_date_id', '', '', '', '')";
			echo $query1."<br/>";
			$result = mysql_query( $query1,$link);
			echo "query inserted<br/>";
			$booked="";
			$go=0;
		}	

}
//----------------------------------------------------------------------------
if($show=="show_matinee")
{
$show="show_matinee";
echo $show;
//$query="select show_noon from show where show_theatre_id ='$show_theatre_id' ";
//and show_date_id = '".$show_date_id."'
$query = "select show_matinee FROM `show` WHERE show_theatre_id='$show_theatre_id'
and show_movie_id='$show_movie_id' and show_date_id='$show_date_id'
";
echo $query;
$result = mysql_query( $query, $link );
echo $result;
if($result)
{   
    echo "inside if<br/>";
    while($row = mysql_fetch_array($result,MYSQLI_ASSOC))
		{  	
			echo "inside while<br/>";
			$booked=$row['show_matinee'].',';
			$go=1;
		}   	
}
if($go=="0")
		{
			//create a query with date if there is no query with this date exist
			$query1="INSERT INTO `booking_system`.`show` (`show_id`, `show_theatre_id`, `show_movie_id`, `show_date_id`,
			`show_noon`, `show_matinee`, `show_firstshow`, `show_secondshow`)
			VALUES (NULL, '$show_theatre_id', '$show_movie_id', '$show_date_id', '', '', '', '')";
			echo $query1."<br/>";
			$result = mysql_query( $query1,$link);
			echo "query inserted<br/>";
			$booked="";
			$go=0;
		}		
}
//----------------------------------------------------------------------------
if($show=="show_firstshow")
{$show="show_firstshow";
echo $show;
//$query="select show_noon from show where show_theatre_id ='$show_theatre_id' ";
//and show_date_id = '".$show_date_id."'
$query = "select show_firstshow FROM `show` WHERE show_theatre_id='$show_theatre_id'
and show_movie_id='$show_movie_id' and show_date_id='$show_date_id'
";
echo $query;
$result = mysql_query( $query, $link );
echo $result;
if($result)
{   
    echo "inside if<br/>";
    while($row = mysql_fetch_array($result,MYSQLI_ASSOC))
		{  	
			echo "inside while<br/>";
			$booked=$row['show_firstshow'].',';
			$go=1;
		}    	
}
if($go=="0")
		{
			//create a query with date if there is no query with this date exist
			$query1="INSERT INTO `booking_system`.`show` (`show_id`, `show_theatre_id`, `show_movie_id`, `show_date_id`,
			`show_noon`, `show_matinee`, `show_firstshow`, `show_secondshow`)
			VALUES (NULL, '$show_theatre_id', '$show_movie_id', '$show_date_id', '', '', '', '')";
			echo $query1."<br/>";
			$result = mysql_query( $query1,$link);
			echo "query inserted<br/>";
			$booked="";
			$go=0;
		}		
}
//----------------------------------------------------------------------------
if($show=="show_secondshow")
{$show="show_secondshow";
echo $show;
//$query="select show_noon from show where show_theatre_id ='$show_theatre_id' ";
//and show_date_id = '".$show_date_id."'
$query = "select show_secondshow FROM `show` WHERE show_theatre_id='$show_theatre_id'
and show_movie_id='$show_movie_id' and show_date_id='$show_date_id'
";
echo $query;
$result = mysql_query( $query, $link );
echo $result;
if($result)
{   
    echo "inside if<br/>";
    while($row = mysql_fetch_array($result,MYSQLI_ASSOC))
		{  	
			echo "inside while<br/>";
			$booked=$row['show_secondshow'].',';
			$go=1;
		}
}
if($go=="0")
		{
			//create a query with date if there is no query with this date exist
			$query1="INSERT INTO `booking_system`.`show` (`show_id`, `show_theatre_id`, `show_movie_id`, `show_date_id`,
			`show_noon`, `show_matinee`, `show_firstshow`, `show_secondshow`)
			VALUES (NULL, '$show_theatre_id', '$show_movie_id', '$show_date_id', '', '', '', '')";
			echo $query1."<br/>";
			$result = mysql_query( $query1,$link);
			echo "query inserted<br/>";
			$booked="";
			$go=0;
		}		
}
//----------------------------------------------------------------------------
//echo $booked;
echo "<br/>";						
				$booked_array = explode(",", $booked);
				/*---------------------------------------------------------------- */
				//Disply array
				for($i=0; $i<count($booked_array)-1; $i++) 
				{	echo $booked_array[$i]."\r\n";	
				}
				mysql_close($link);
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
					<form method="post" name="search" id="search" action="process_seat.php" enctype="multipart/form-data">	
						<input type="text" class="field" value="keywords here ..." title="keywords here ..." />
						<input type="submit" class="search-btn" value="" />
						<div class="cl">&nbsp;</div>
				
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
				
				
				    
				
				<!--	<div class="colm" align="center" style="margin-top:20px;"> -->
					
                  <div class="colm" align="center" style="margin-top:20px;">
					
					
<?php

$set=0;
$newline=0;
for($j=1;$j<=40;$j++)
{
for($i=0;$i<=count($booked_array)-2;$i++)
{
		if($booked_array[$i]=="0")
		continue;
		else
		{if($j == $booked_array[$i])
		{
		echo '<input type="checkbox" value="true" style="width:15px;margin-left:10px;margin-bottom:10px;" id="';		
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
		{echo '<input type="checkbox" value="true" style="width:15px;margin-left:10px;margin-bottom:10px;" id="';		
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
for($i=0;$i<=count($booked_array)-2;$i++)
{
		if($booked_array[$i]=="0")
		continue;
		else
		{if($j == $booked_array[$i])
		{echo '<input type="checkbox" value="true" style="width:15px;margin-left:10px;margin-bottom:10px;" id="';		
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
		{echo '<input type="checkbox" value="true" style="width:15px;margin-left:10px;margin-bottom:10px;" id="';		
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
for($i=0;$i<=count($booked_array)-2;$i++)
{
		if($booked_array[$i]=="0")
		continue;
		else
		{if($j == $booked_array[$i])
		{echo '<input type="checkbox" style="width:15px;margin-left:10px;margin-bottom:10px;" value="true" id="';		
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
		{echo '<input type="checkbox" style="width:15px;margin-left:10px;margin-bottom:10px;" value="true" id="';		
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
echo '
<input type="hidden" name="theatre_id" id="theatre_id" value="'.$show_theatre_id.'">
<input type="hidden" name="movie_id" id="movie_id" value="'.$show_movie_id.'">
<input type="hidden" name="date_id" id="date_id" value="'.$show_date_id.'">
<input type="hidden" name="show" id="show" value="'.$_GET['show'].'">
';

?>
					 
<input type="submit" value="Next >" id="submit" name="submit" class="submit_btn float_l" />		         
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