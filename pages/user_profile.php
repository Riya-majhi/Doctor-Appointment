<?php  
	session_start();
	require 'connection1.php';
	if (isset($_SESSION['user_details']) && !empty($_SESSION['user_details'])) {
		$user_id = $_SESSION['user_details']['id'];
		$user_name = $_SESSION['user_details']['name'];
		$user_email = $_SESSION['user_details']['email'];
		$user_ph = $_SESSION['user_details']['phone'];
		$user_gender = $_SESSION['user_details']['gender'];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
    input{
        border: none;
        background-color: transparent;
        padding-left:15px; 
        text-indent: 25px;
    }
    #user_id{
    	margin-left: 20px;
    }
    #details
    {
    	text-transform: uppercase;
    	font-size: 20px;
    	font-family: bold;
    }
    label{
    	font-family: Ink Free;
    }
</style>
</head>
<body>
		<div>
			<label id="details">Your Details</label>
			<br><br><label for="user_name">Id-</label>
			<input type="text" name="user_id" id="user_id" value="<?= $user_id; ?>" readonly="">
		</div>
		<div>
			<label for="user_name">Name-</label>
			<input type="text" name="user_name" id="user_name" value="<?= $user_name; ?>" readonly="">
		</div><div>
			<label for="user_email">Email-</label>
			<input type="text" name="user_email" id="user_email" value="<?= $user_email; ?>" readonly="">
		</div>
		<div>
			<label for="user_name">Gender-</label>
			<input type="text" name="user_name" id="user_name" value="<?= $user_gender; ?>" readonly="">
		</div>
		<div>
			<label for="user_name">Phone-</label>
			<input type="text" name="user_name" id="user_name" value="<?= $user_ph; ?>" readonly="">
		</div>
</body>
</html>