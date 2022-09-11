<?php 
	require'connection1.php';
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>doctor registration</title>
	
	<script src="../assets/lib/jquery/jquery.min.js"></script>
 <link href="../assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="../assets/lib/css/doc_stylee.css">
<link rel="stylesheet" type="text/css" href="../assets/lib/jquery/jquery_timepicker/jquery.timepicker.min.css">
<script src="../assets/lib/jquery/jquery-3.4.1.js"></script>
<script src="../assets/lib/jquery/jquery_timepicker/jquery.timepicker.min.js"></script>
	
	<style type="text/css">
		#errName,#errMobile,#errCity,#errSpecial,#errGender,#errDay{
			color: red;
			font-weight: bold;
		}
		label {
			font-weight: bold;
		}
		input[type=text] {
			border-radius: 0px;
		}
		input[type=text]:focus {
			box-shadow: none;
			border: 1px solid green;
		}

	</style>
</head>
<body>
	<!-- name,email,mobile,city,gender,hobby,password,confirm password -->
<div class="row">
	<div class="col-md-6 offset-3">	
	<h4 class="text-center bg-success text-white p-3 m-0">Doctor Registration Form</h4>
	<form class="pt-3 pl-5 pr-5 bg-light" method="POST" enctype="multipart/form-data" action="">
		<div class="form-group">
			<label>Name<span class="text-danger"> *</span></label>
			<input type="text" name="user_name" id="user_name" placeholder="Enter Name" class="form-control" required autocomplete="off">
			<div id="errName"></div>
		</div>
		
		<div class="form-group">
			<label>Mobile<span class="text-danger"> *</span></label>
			<input type="text" name="user_mobile" id="user_mobile" placeholder="Enter Mobile Number" class="form-control" required autocomplete="off">
			<div id="errMobile"></div>
		</div>

		<div class="form-group form-inline">
			<label>Gender<span class="text-danger"> *</span></label> &nbsp;&nbsp;
			<input type="radio" name="user_gender" class="user_gender" value="male" checked="">&nbsp;&nbsp; Male
			&nbsp;&nbsp;<input type="radio" name="user_gender" class="user_gender" value="female">&nbsp;&nbsp; Female
			<div id="errGender"></div>
		</div>
		

		<div class="form-group">
			<label >Specialization<span class="text-danger"> *</span></label>
			<select id="user_special" name="user_special" class="form-control" required>
				<option value="">Select..</option>
				<option value="Dentist">Dentist</option>
				<option value="Homeopathetic">Homeopathetic</option>
				<option value="Radiologist">Radiologist</option>
				<option value="Dermatologist">Dermatologist</option>
				<option value="Gastroenterologist">Gastroenterologist</option>
				<option value="General Physician">General Physician</option>
				<option value="Urologist">Urologist</option>
				<option value="Paediatricians">Paediatricians</option>
				<option value="General Surgeon">General Surgeon</option>
				<option value="Cardiologist">Cardiologist</option>
				<option value="Diabetologist">Diabetologist</option>
				<option value="Geynaecologist">Geynaecologist</option>
				<option value="Psychiatrist">Psychiatrist</option>
				<option value="Otolaryngologist">Otolaryngologist</option>
				<option value="Orthopedic">Orthopedic</option>
				<option value="Eye Care">Eye Care</option>

			</select>
			<div id="errSpecial"></div>
		</div>

		<div class="form-group">
			<label>Location<span class="text-danger"> *</span></label>
			<select id="user_city" name="user_city" class="form-control" required>
				<option value="">Select..</option>
				<option value="Kolkata">Kolkata</option>
				<option value="Bardhaman">Bardhaman</option>
				<option value="Chinsurah">Chinsurah</option>
			</select>
			<div id="errCity"></div>
		</div>

		<div class="form-group">
			<label>Day<span class="text-danger"> *</span></label>&nbsp;&nbsp;
			<input type="checkbox" name="user_day[]" value="Monday" required="">&nbsp;&nbsp; Mon 
			&nbsp;&nbsp;<input type="checkbox" name="user_day[]" value="Tuesday" required="">&nbsp;&nbsp; Tue
			&nbsp;&nbsp;<input type="checkbox" name="user_day[]" value="Wednesday" required="">&nbsp;&nbsp; Wed
			&nbsp;&nbsp;<input type="checkbox" name="user_day[]" value="Thursday" required="">&nbsp;&nbsp; Thurs
			&nbsp;&nbsp;<input type="checkbox" name="user_day[]" value="Friday" required="">&nbsp;&nbsp; Fri
			&nbsp;&nbsp;<input type="checkbox" name="user_day[]" value="Saturday" required="">&nbsp;&nbsp; Sat
			&nbsp;&nbsp;<input type="checkbox" name="user_day[]" value="Sunday" required="">&nbsp;&nbsp; Sun
			<div id="errDay"></div>
		</div>

		<div class="form-group">
			<label>Fees<span class="text-danger"> *</span></label>
			<input type="text" name="user_fee" id="user_fee" placeholder="Enter Fees" class="form-control" required autocomplete="off">
			<div id="errMobile"></div>
		</div>

		<div class="form-group">
			<label>Upload Image<span class="text-danger"> *</span></label>
			<div class="custom-file">
			 <input type="file" class="custom-file-input" id="user_file" name="user_file" required>
				<label class="custom-file-label" for="user_file">image...</label>
			</div>							
		</div>
		<div class="form-group">
			<label>Start<span class="text-danger"> *</span></label>
			<input type="text" name="user_time1" id="user_time1" placeholder="Enter start time" class="form-control timepicker" required autocomplete="off">
			<div id="errtime1"></div>
		</div>	

		<div class="form-group">
			<label>End<span class="text-danger"> *</span></label>
			<input type="text" name="user_time2" id="user_time2" placeholder="Enter end time" class="form-control timepicker" required autocomplete="off">
			<div id="errtime2"></div>
		</div>	

		<div class="form-group text-center m-0 pb-2">
			<button type="submit" class="btn btn-outline-dark"  name="reg">Register</button>
		</div> 
	</form> 
	<div class="p-3 bg-dark m-0 text-center text-white">
		Developed with love and care
	</div>
	</div>
</div>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> 

	<script type="text/javascript">
		$(function(){
			$('#user_time1').timepicker({
				// timeFormat: 'h:mm p',
				dynamic: true,
			});
			$('#user_time2').timepicker({
				// timeFormat: 'h:mm p',
				dynamic: true,
			});

		    var requiredCheckboxes = $(':checkbox[required]');

		    requiredCheckboxes.change(function(){

		        if(requiredCheckboxes.is(':checked')) {
		            requiredCheckboxes.removeAttr('required');
		        }

		        else {
		            requiredCheckboxes.attr('required', 'required');
		        }
		    });

		});


	</script>
</body>
</html>

<?php  
    if (isset($_POST['reg'])) {
		$name = $_POST['user_name'];
		$mobile = $_POST['user_mobile'];
		$gender = $_POST['user_gender'];
		$special = $_POST['user_special'];
		$location = $_POST['user_city'];
	    $day = implode(',', $_POST['user_day']);
	    $destination = '../assets/upload/'.rand(1,9999).$_FILES['user_file']['name'];
	    move_uploaded_file($_FILES['user_file']['tmp_name'], $destination);
	    $time1 = $_POST['user_time1'];
	    $time2 = $_POST['user_time2'];
	    $duration = $time1." - ".$time2;
	    $fees = $_POST['user_fee'];
	    
		$insert_sql = "INSERT INTO `doctor_registration`(`name`, `mobile`, `gender`, `specialization`, `location`, `day`,`duration`,`fees`,`file_name`) VALUES ('$name','$mobile','$gender','$special','$location','$day','$duration','$fees','$destination')";
		

		$response  = mysqli_query($conn,$insert_sql);
		if ($response) {
			 header('location:../admin/Adminpanel/doctor_list.php');
			 ob_end_flush();
			 }
		 else {}
		}
	?>