<?php
	session_start();
	require'connection1.php';
	if (isset($_POST['submit_btn'])) {		 
	 	$email = $_POST['email'];
	 	$password = $_POST['password'];
	 	$qry = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'";

	 	$run = mysqli_query($conn,$qry);
	 	$user_details = mysqli_fetch_assoc($run);
	 	if (!empty($user_details)) { 	 		
 			$_SESSION['user_details'] = $user_details;
 			header('location:doctors_page.php'); 	 		 	 			 	 
	 	} else {
	 		echo "<script>alert('Incorrect Password or Username Please try again')</script>";
	 	}
	}
?>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/lib/css/login.css">
</head>
<body>
	<div class="bg-image"></div>
    <div class="loginbox">
		<img src="../assets/img/login.png" class="avatar">
		<h1>Login here</h1>
		<form action="myuserlogin.php" method="POST">
			<p>Email Id</p>
			<input type="email" name="email" placeholder="Enter Email Id">
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password">
			<input type="submit" name="submit_btn"><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="myuserreg.php">New User?</a><br>
		</form>
	</div>
</body>
</html>
<?php 
		

	?>