<?php
	require 'connection1.php';
	$doc_id = $_POST['doc_id'];
	$user_id = $_POST['user_id'];
	$booking_date = date('Y-m-d',strtotime($_POST['booking_date']));

	$sql = "INSERT INTO `appoinment`(`doctor_id`, `user_id`, `booking_date`, `status`) VALUES ('$doc_id','$user_id','$booking_date','1')";

	$row_count_query = "SELECT * FROM `appoinment` WHERE doctor_id='".$doc_id."' AND `booking_date`='".$booking_date."'";
	$row_count = mysqli_num_rows(mysqli_query($conn,$row_count_query));
	
	if ($row_count <= 15) {
		if(mysqli_query($conn,$sql)){
			echo '1';
		} else {
			echo '0';
		}
	} else {
		echo '2';
	}



?>