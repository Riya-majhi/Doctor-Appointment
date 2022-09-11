<?php
  require'connection1.php';


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
   </div>
<?php
  } 
// } 
?>
                