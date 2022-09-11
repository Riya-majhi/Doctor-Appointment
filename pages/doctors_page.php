<?php 
   session_start();
   require'connection1.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Doctors page</title>
	
  <script src="../assets/lib/jquery/jquery.min.js"></script>
  <script src="../assets/lib/jquery-3.4.1.js"></script>
  <link href="../assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>

  <link href="../assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- JavaScript Libraries -->
  <script src="../assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="../assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  
  <!------ Include the above in your HEAD tag ---------->

  <style type="text/css">
    .form-control-1 {
      width: 35% !important;
      padding: 10px;
      
      border: 1px solid green;
    }
    .form-control-1:focus {
      box-shadow: none !important;

      .register-right{
  background:rgba(, 0, 0, 0.3); 
}
    }
    .bg-header{
      background-color: black;
    }
  </style>
</head>

<body>
  <!-- --------------------------------------------------------navbar-------------------------------------------------------------- -->
	<div class="container-fluid p-0 m-0">
    <div class="row p-4 fixed-top bg-header">
      <div class="col-md-9 m-0 p-0">
        <h3 class="m-0 text-white" style="font-family: Georgia; text-transform: uppercase;font-style: italic;">Docscape</h3>
      </div>
      <div class="col-md-3 m-0 p-0 pr-2 text-right">
        <a href="logout.php" class="btn btn-danger">logout</a>
      </div>
    </div>
    
    <div class="row" style="margin-top: 90px;background:rgba(0, 0, 0, 0.2); ">
      <!-- ------------------------------------------------------user profile------------------------------------------------------- -->
      <div class="col-md-3 bg-light">
        <div style="position: fixed;z-index: 1;top: 90;left:0;overflow-x: hidden;">
          <h1 class="text-center mt-2" style="margin-left: 90px;">Profile</h1>
          <!-- profile information  -->
          <div id="user_details"></div>
        </div>
      </div>
      <!-- ----------------------------------doctor section ------------------------------------------------>
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-12">
            <!-------------------------------- search bar --------------------------------------------------------->
            <section class="search-sec">          
              <form method="POST" action="confirm_app.php">
                <div class="row p-4">        
                  <div class="col-md-4 pl-5">
                      <select class="form-control search-slt" name="location" id="location">
                          <option value="">Select your location</option>
                          <option value="Kolkata">Kolkata</option>
                          <option value="Bardhaman">Bardhaman</option>
                          <option value="Chinsurah">Chinsurah</option>
                      </select> 
                  </div>
                                     
                  <div class="col-md-4">
                    <select class="form-control search-slt" name="spec" id="spec">
                      <option value="">Select Specizilation</option>
                      <option value="Dentist">Dentist</option>
                      <option value="Homeopathetic">Homeopathetic</option>
                      <option value="Radiologist">Radiologist</option>
                      <option value="Dermatologist">Dermatologist</option>
                      <option value="Gastroenterologist">Gastroenterologist</option>
                      <option value="General Physician">General Physician</option>
                      <option value="Pathologist">Pathologist</option>
                      <option value="Urologist">Urologist</option>
                      <option value="Paediatricians">Paediatricians</option>
                      <option value="General Surgeon">General Surgeon</option>
                      <option value="Cardiologist">Cardiologist</option>
                      <option value="Diabetologist">Diabetologist</option>
                      <option value="Pulmonary Medicine">Pulmonary Medicine</option>
                      <option value="Geynaecologist">Geynaecologist</option>
                      <option value="Sexologist">Sexologist</option>
                      <option value="Psychiatrist">Psychiatrist</option>
                      <option value="Otolaryngologist">Otolaryngologist</option>
                      <option value="Neonatal Physician">Neonatal Physician</option>
                      <option value="Pain Consultant">Pain Consultant</option>
                      <option value="Oncologist">Oncologist</option>
                      <option value="Orthopedic">Orthopedic</option>
                      <option value="Eye Care">Eye Care</option>
                    </select>
                  </div>
                           
                  <div class="col-md-4">
                      <button type="button" class="btn btn-primary pl-4 pr-4" name="search_btn" onclick="find_doctor_details()">Find</button>
                  </div>
                </div>
              </form>  
            </section>    
          </div>
        </div>
        <!-- ---------------search bar--------------------------------------- -->
        <!-- show all doctor details  -->
        <div id="doctor_details"></div>
      </div>  
    </div>  
  <!-- footer section -->
  <div class="bg-dark ">
    <h6 class="text-white p-5 text-center font-weight-normal mb-0"><i class="fa fa-copyright" aria-hidden="true"></i> Sys Docscape. All Rights Reserved.</h6>
  </div>
</div>

<script type="text/javascript">
  find_doctor_details();
  function find_doctor_details() {
    var location = $('#location').val();
    var spec = $('#spec').val();
    
    $.ajax({
      type:'POST',
      url : 'find_doctor_work.php',
      data : {'location' : location, 'spec':spec},
      success: function(res) {
        $("#doctor_details").html(res);
      }
    });
  }

  $(document).ready(function(){
    $('#user_details').load("user_profile.php");
  });
</script>

</body>
</html>