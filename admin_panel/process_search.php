<?php session_start();
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
        <div class="menu" style="float:right">
        	<ul>                                                                         
        		                                                                    
        		<li><a href="home.php">Home</a></li>
                <li><a href="add_theatres.php">Add Theatre</a></li>
                <li class="selected"><a href="delete_theatre.php">Delete Theatre</a></li>
                <li><a href="contactus.php">Logout</a></li>
        	
        	</ul>
        </div>
        
    <div class="content_form">
	
	     <div class="title_welcome">
			     Online Movie Ticket Booking Control Panel
		 </div> <br/><br/>
    
	     <span style="color:rgb(185, 34, 34);font-size:21px;margin-left:40px;">Theatre Listing</span><br/>
     	
	       	<table cellspacing="0" style="width:80%">
						
						<tr>
						   <th>Theater Name</th>
						   <th>Location</th>
						   <th>District</th>
						   <th>Delete</th>
						</tr>
						
			 <?php

	
	               $name=$_POST['theatre_name'];
	  
	               $district=$_POST['theatre_district'];			
				   
				   $link=mysql_connect("localhost","root","root")or die("can not connect");
	               mysql_select_db("booking_system",$link) or die("can not select database");

                   $query="select * from theatre where theatre_district = '".$district."' or theatre_name='".$name."'";
                   $result = mysql_query($query,$link)or die("wrong query");

                      while(($row1  = mysql_fetch_array($result)))
                          {
                              echo 
							    '<tr>
							        
									<td>'.$row1['theatre_name'].'</td>
									<td>'.$row1['theatre_location'].'</td>
									<td>'.$row1['theatre_district'].'</td>
							        <td>
								       <a href="process_delete.php?id='.$row1['theatre_id'].'">
									   <input type="button" style="width:120px;" name="delete" id="delete" Value="Delete"></a>
								    </td></tr>';						  
                          } 



				
			 ?>	   
		    
       
	        </table>     
        
        <div class="clear"></div> 
    
    </div>                                
         

    
    <div id="footer">                                              
        <div class="left_footer">
		   
		   <a href="#">home</a> 
			<a href="#">about</a> 
			<a href="#">privacy policy</a>
			<a href="#">contact</a></div>
       
    </div>
    
    
    
</div>
<!-- end of main_container -->

</body>
</html>