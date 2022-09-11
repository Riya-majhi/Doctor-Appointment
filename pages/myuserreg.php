<?php 
    session_start();
    require 'connection1.php';

    if (isset($_POST['create'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['Phone'];
        $gender = $_POST['emp_gender'];
        $password = $_POST['Password'];

        $insert_sql = "INSERT INTO `user` (`name`, `email`, `phone`, `gender`, `password`) VALUES ('$name', '$email', '$phone', '$gender', '$password')";
         $response  = mysqli_query($conn,$insert_sql);
         $user_details = mysqli_fetch_assoc($response);
        if($response){
            $_SESSION['user_details'] = $user_details;
            header('location:myuserlogin.php');
            die();
        }
         else{
            echo "Failed";
         }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
    <script src="../assets/lib/jquery/jquery.min.js"></script>
	<link href="../assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>
    	<link href="../assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="../assets/lib/css/sign-in.css">
</head>

<body>
		<div class="container big-banner">
            <form method="POST" class="" id="prospects_form" action="myuserreg.php">
			<div class="row">
                <div class="col-md-3 register-left"></div>
				<div class="col-md-5 register-right">
                  <div class="row">
                    <div class="col-md-8">
                       <h3 class="text-danger p-2">Sign In</h3>      
                    </div>
                    <div class="col-md-4 text-right">
                      <h3 class="mt-2"><a href="../Homepage.php" style="text-decoration: none" class="text-danger font-weight-bold"><span class="fa fa-home text-danger">&nbsp;</span></a></h3>
                    </div>
                  </div>
        			<hr class="mb-1">

        			
        			<input class="form-control" type="text" name="name" id="first" autocomplete="off" placeholder="Enter name" required="">
        			<span id="firstnameErr" class="text-danger font-weight-bold"></span><br>

        			
        			<input class="form-control" type="text" name="Phone" id="num" autocomplete="off" placeholder="Enter Phone Number" 
                    placeholder="Enter Phone" required="">
        			<span id="phoneErr" class="text-danger font-weight-bold"></span><br>

        			
        			<input type="radio" name="emp_gender"class="form-control-inline gen" value="male">&nbsp;&nbsp;Male
        			<input type="radio" name="emp_gender" class="form-control-inline gen" value="female">&nbsp;&nbsp;Female
        			<span id="genderErr" class="text-danger font-weight-bold"></span><br><br>
        			

                    <input class="form-control" type="text" name="email" id="email" autocomplete="off" placeholder="Enter your email" required="">
                    <span id="emailErr" class="text-danger font-weight-bold"></span><br>
                    

                    <input class="form-control" type="Password" name="Password" id="pass" autocomplete="off" placeholder="Enter Password" required="">
                    <span id="passErr" class="text-danger font-weight-bold"></span><br>

                    <div class="form-group text-center m-0 pb-2">
                        <button type="submit" class="btn btn-danger"  name="create">Register</button>
                     </div> 
        		</div>

				</div>
            </form>
			</div>

<!-- <script type="text/javascript">

        function validation(){

        	var first = document.getElementById('first').value;
        	var last = document.getElementById('last').value;
        	var num = document.getElementById('num').value;
        	var pass = document.getElementById('pass').value;
        	var conpass = document.getElementById('conpass').value;
        	var loc = document.getElementById('loc').value;
            // alert(first+last+num+pass+conpass+loc);return false;

	        if(first == ""){
        		document.getElementById('firstnameErr').innerHTML="*please fill the field*";
        		return false;
        	}

        	if(last == ""){
        		document.getElementById('lastnameErr').innerHTML="*please fill the field*";
        		return false;
        	}

        	if(num == ""){
        		document.getElementById('phoneErr').innerHTML="*please fill the field*";
        		return false;
        	}

        	if(pass == ""){
        		document.getElementById('passErr').innerHTML="*please fill the field*";
        		return false;
        	}

        	if(conpass == ""){
        		document.getElementById('conpassErr').innerHTML="*please fill the field*";
        		return false;
        	}

        	// if(gen == ""){
        	// 	document.getElementById('gen').innerHTML="*please fill the field*";
        	// 	e.preventDefault();
        	// }

        	if(loc == ""){
        		document.getElementById('locationErr').innerHTML="*please fill the field*";
        		return false;
        	}
        }

        // $("#prospects_form").submit(function(e) {
        //     e.preventDefault();
        // });

     </script>
 --></body>
</html>
