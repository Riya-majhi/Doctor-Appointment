<?php 
	session_start();
	require 'connection1.php';
	$user_id = '';
	if (isset($_SESSION['user_details']) && !empty($_SESSION['user_details'])) {
		$user_id = $_SESSION['user_details']['id'];
	}
	if (isset($_GET['doc_id'])) {
		$doc_id = $_GET['doc_id'];
		$get_single_user_query = "SELECT * from doctor_registration WHERE id='".$doc_id."'";
		$single_emp_response = mysqli_query($conn,$get_single_user_query);
		$single_emp_details = mysqli_fetch_assoc($single_emp_response);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirm Appointment</title>
	<meta charset="utf-8">
	<script src="../assets/lib/jquery/jquery-3.4.1.js"></script>
	<script src="../assets/lib/jquery/jquery.min.js"></script>
  
  	<link href="../assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  	<script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="../assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<style type="text/css">
		.form-container{
			background-color: #fff;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px #000;
			position: absolute;
			top: 190px;
		}
	</style>
	<section class="container-fluid">
		<section class="row justify-content-center">		<!-- Whole block -->
			<section class="col-12 col-sm-6 col-md-3">		<!-- inside the block -->
				<form action="appointment_user.php" method="POST" class="form-container">
					<input type="hidden" name="emp_id" value="<?= $single_emp_details['id']; ?>">
					<input type="hidden" name="user_id" id="user_id" value="<?= $user_id; ?>">
					  <div class="form-group">
					  	<label for="update_doc_name">Name</label>
						<input type="text" class="form-control" name="update_doc_name" id="update_doc_name" value="<?= $single_emp_details['name']; ?>" readonly="">
					  </div>
					  <div class="form-group">
					  	<label for="user_book_date"></label>
					  	<input type="text" name="date" class="form-control" placeholder="Enter Booking date" id="booking-date" required="">
					    
					  </div>
					 <div class="form-group">
						  <label for="update_emp_name">Fees</label>
							<input type="text" name="update_doc_name" id="update_doc_name" class="form-control" value="<?= $single_emp_details['fees']; ?>" readonly="" >
						</div>
						<button type="button" name="submit_btn" class="btn btn-primary btn-block" id="booking-btn" onclick="book_appoinment('<?= $single_emp_details['id'] ?>','<?= $user_id ?>')">Book Appointment</button>
				</form>
			</section>
		</section>
	</section>
	<script type="text/javascript">
		$(function(){
			$("#booking-date").datepicker();			
		});	
		function book_appoinment(doc_id='',user_id = '') {
			var booking_date = $("#booking-date").val();
			$.ajax({
				type:'POST',
				url : 'book_appoinment_work.php',
				data : {
					doc_id : doc_id,
					user_id : user_id,
					booking_date : booking_date,
				},
				success:function(response){
					if (response == 1) {
					
						swal("Booking Confirmed!", "You clicked the button!", "success")
						.then((value) => {
						  window.location.href = "http://localhost/MyPHP/doctor_project/doctorappointment/pages/doctors_page.php"; 
						});
					} else if(response == 2) {
						swal("Slot is already Full!", "Please try another date!", "warning")
						.then((value) => {
						  window.location.href = "http://localhost/MyPHP/doctor_project/doctorappointment/pages/doctors_page.php";
						});
					} else {
						swal("Booking Failed!", "Please try again!", "warning")
						.then((value) => {
						  window.location.href = "http://localhost/MyPHP/doctor_project/doctorappointment/pages/doctors_page.php";
						});
					}
				}
			});
		}
	</script>
</body>
</html>