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
      /*margin-left: 300px;*/
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
        <h3 class="m-0 text-white" style="font-family: Georgia; text-transform: uppercase; font-style: italic;">Docscape</h3>
      </div>
      <div class="col-md-3 m-0 p-0 pr-2 text-right">
        <a href="myuserreg.php" class="btn btn-danger">sign in</a>
      </div>
    </div>
    
    <div class="row" style="margin-top: 90px;background:rgba(0, 0, 0, 0.2); ">
      <!-- ------------------------------------------------------user profile------------------------------------------------------- -->
      <div class="col-md-3 bg-light">
        <div style="position: fixed;z-index: 1;top: 90;left:0;overflow-x: hidden;"></div>
      </div>
      <!-- ----------------------------------doctor section ------------------------------------------------>
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-12">
            <!-------------------------------- search bar --------------------------------------------------------->
            <section class="search-sec">          
              <form method="POST" action="doctors_page_notlogin.php">
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
                      <button type="submit" class="btn btn-primary pl-4 pr-4" name="search_btn">Find</button>
                  </div>
                </div>
              </form>  
            </section>    
          </div>
        </div>
        <!-- ---------------search bar--------------------------------------- -->
        <!-- show all doctor details  -->
        <div id="doctor_details">
          <?php
  // require'connection1.php';

     if (isset($_POST['search_btn'])) {
      $location = $_POST['location'];
      $specialization = $_POST['spec'];
  
      
      if ($location == '' && $specialization == '') {
        $view_sql = "SELECT * FROM `doctor_registration`";
        $response = mysqli_query($conn,$view_sql);
        
      } elseif ($specialization == '') {
         $view_sql = "SELECT * FROM doctor_registration where `location`='$location'";
         $response = mysqli_query($conn,$view_sql);
         
      } elseif ($specialization != '' && $location != '') {
         $view_sql = "SELECT * FROM doctor_registration where `location`='$location' and `specialization` ='$specialization'";    
         $response = mysqli_query($conn,$view_sql);
         
      } elseif ($location == '') {
        $view_sql = "SELECT * FROM doctor_registration where `specialization` ='$specialization'";
        $response = mysqli_query($conn,$view_sql);
        
      }     
      while($data = mysqli_fetch_assoc($response)) {
        
?>

<div class="row">
      <div class="col-md-12">
         <div class="card border-primary flex-md-row mb-4 shadow-sm h-md-250 mx-5"> 
            <img class="card-img-left flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="<?= $data['file_name']; ?>" style="width: 180px; height: 180px; border-radius: 50%">

            <div class="card-body d-flex flex-column ml-3 align-items-start">
               <strong class="d-inline-block mb-2 text-primary"><?php echo $data['name']; ?></strong>
               <i><u><?php echo $data['specialization']; ?></u></i>               
               <div class="mb-1 text-muted"><?php echo $data['location']; ?></div>
               <div class=""><i class="fa fa-calendar-o"></i> Appointment alavilable on : <?php echo $data['day']; ?></div>
               <div><i class="fa fa-clock-o"></i>  <?php echo $data['duration']; ?></div>               
              <div class="text-muted"> <i class="fa fa-user-md">  <?php echo $data['mobile']; ?></i></div>
            </div>
            
              <div class="card-footer bg-white align-self-end">
                  <a class="btn btn-outline-primary btn-md align-self-end" href="login_check_app_btn.php" role="button">Book Appointment</a>
              </div>
            </div>
         </div>
       </div>
<?php
  } 
}
// } 
?>
                
        </div>
      </div>  
    </div>  
  <!-- footer section -->
  <div class="bg-dark ">
    <h6 class="text-white p-5 text-center font-weight-normal mb-0"><i class="fa fa-copyright" aria-hidden="true"></i> Sys Docscape. All Rights Reserved.</h6>
  </div>
</div>



</body>
</html>