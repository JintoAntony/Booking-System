<?php

?>

<head>

	<!-- Basics -->
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Login</title>

	<!-- CSS -->
	
	<link rel="stylesheet" href="css/reset.css">
<!--	<link rel="stylesheet" href="css/animate.css"> -->
	<link rel="stylesheet" href="css/style_login.css"> 
	<link rel="stylesheet" href="css/style_patient.css">
	
</head>

	<!-- Main HTML -->
	
<body>
	
	
	
	
	
	<!-- Begin Page Content -->
	
	<div id="containers">
		
		<form action="process_login.php" method="post" name="login">
		
		<label for="name">Username:</label>
		
		<input type="name" name="username" id="username">
		
		<label for="username">Password:</label>
		
		<input type="password" name="password" id="password">
		
		<div id="lower">
		
	    <input type="submit" value="Login" name="login" id="login">
		
		</div>
		
		</form>
		
	</div>
	
	
	<!-- End Page Content -->
	
</body>

</html>