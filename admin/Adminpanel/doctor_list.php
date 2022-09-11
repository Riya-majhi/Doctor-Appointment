<?php
    require 'connection.php';
    require 'header.php';
    require 'menu.php';
?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
	        <div class="col-lg-12">
	            <h1 class="page-header text-center">Doctor List</h1>
	        </div>
	        <!-- /.col-lg-12 -->
	    </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All Doctors
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body ">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="doc-list">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl No</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Mobile</th>
                                        <th class="text-center">Gender</th>
                                        <th class="text-center">Specilization</th>
                                        <th class="text-center">Location</th>
                                        <th class="text-center">Day</th>
                                        <th class="text-center">Duration</th>
                                        <th class="text-center">Fees</th>
                                        <th class="text-center">Delete</th>
                                    </tr>
                                </thead>

                                 <?php  
                                     $sql = "SELECT * FROM `doctor_registration`";
                                         $result = mysqli_query($conn,$sql);
                                                                        

                                            while ($rows = mysqli_fetch_assoc($result)) {

                                        ?>
                                        <tbody class="text-center">
                                        <tr class="">
                                                <td><?php echo $rows['id']; ?></td>
                                                <td><?php echo $rows['name']; ?></td>
                                                <td><?php echo $rows['mobile']; ?></td>
                                                <td><?php echo $rows['gender']; ?></td>
                                                <td><?php echo $rows['specialization']; ?></td>
                                                <td><?php echo $rows['location']; ?></td>
                                                <td><?php echo $rows['day']; ?></td>
                                                <td><?php echo $rows['duration']; ?></td>
                                                <td><?php echo $rows['fees']; ?></td>
                                                <td class="text-center">
                                                    <a href="#" onclick="deleteUser('<?= $rows['id']; ?>')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                </td>
                                        </tr>
                                        </tbody>
                                 <?php 
                                        }
                                  ?>

                            </table>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
	</div>
</div>	
<script>
    $(document).ready(function() {
        $('#doc-list').DataTable({
            responsive: true,
        });
    });

    function deleteUser(id='') {
    	// alert(id);return false;
        swal({
		  	title: "Are you sure?",
		  	text: "Once deleted, you will not be able to recover this imaginary file!",
		  	icon: "warning",
		  	buttons: true,
		  	dangerMode: true,
		})
		.then((willDelete) => {
		  if (willDelete) {
		    $.ajax({
                type:'POST',
                data: {'user_id':id},
                url : 'deleteworksdoc.php',
                success:function(result) {
                    if (result == 1) {
                        swal("Poof! Your imaginary file has been deleted!", {
                          icon: "success",
                        });                        
                    } else {
                        swal("Something went wrong Please try again!");
                    }
                    window.location.href = "doctor_list.php";
                }

            });
		  } else {
		    swal("Your imaginary file is safe!");
		  }
		});
    }

  //   function changeStatus(status) {
  //   	swal({
		//   	title: "Are you sure?",
		//   	text: "want to chnage the status",
		//   	icon: "warning",
		//   	buttons: true,
		//   	dangerMode: false,
		// })
		// .then((willDelete) => {
		//   	if (willDelete) {
		// 	  	if (status == 1) {
		// 	  		swal("User has been Deactivated Successfully", {
		// 		      icon: "warning",
		// 		    });
		// 	  	} else {
		// 	  		swal("User has been Activated Successfully", {
		// 		      icon: "success",
		// 		    });
		// 	  	}
		//   	} else {
		//     	swal("User status not changed!");
		//   	}
		// });
  //   }
</script>	
