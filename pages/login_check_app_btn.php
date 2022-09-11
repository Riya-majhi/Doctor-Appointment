<?php  
	session_start();

	if (isset($_SESSION['username'])) {
		header('location:doctors_page.php');
	} else {
		header('location:myuserlogin.php');
	}

?>