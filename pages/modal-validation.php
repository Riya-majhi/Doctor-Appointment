<?php
    require'connection1.php';

    if (isset($_POST['btn-admin'])) {
       
       $name = $_POST['name'];
       $password = $_POST['password'];

       $qry = "SELECT * FROM `user` WHERE `name` = '$name' AND `password` = '$password'";

       $run = mysqli_query($conn,$qry);
       $row = mysqli_num_rows($run);

       if ($run) {
         
         if ($row > 0) {
          echo "<script>location.href='admin/Adminpanel/admindashboard.php'</script>";
          die();
         }
         else{
          echo "<script>alert('Username or Password is incorrect Please try again')</script>";
          echo "<script>location.href='Homepage.php'</script>";
         }
       }
    }

  ?>