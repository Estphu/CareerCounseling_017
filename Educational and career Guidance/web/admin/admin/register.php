<?php
$conn=mysqli_connect("localhost","root","","pharmacare");
	if(isset($_GET['delete']))
	{
		$id = $_GET['delete'];
		mysqli_query($conn, "DELETE from formm where P_key='$id'");
		
	}
	
{	
	
$conn=mysqli_connect("localhost","root","","pharmacare");
$sql = "SELECT COUNT(P_KEY) as msg_count from formm";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);
$msg_count = $result['msg_count'];
		
	}


 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PharmaCare</title>
	<link rel="shortcut icon" href="img/favicon.png" />
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>        </div>
        <div class="sidebar-brand-text mx-3">Admin <sup>PharmaCare</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Admin PharmaCare Dashboard</span></a>      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface      </div>

   
      

      <!-- Nav Item - Tables -->
     <li class="nav-item active">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Emails</span></a>      </li>
		  
      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="register.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Registered Patients</span><span class="msgCount" style="color:#FFFF00"> <?php echo $msg_count; ?> </span></a>      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>          </button>

          <!-- Topbar Search -->
              <div class="input-group-append">
               
              </div>
           <span><h3>Registered Patients !</h3></span>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            

            <!-- Nav Item - Alerts -->
         

            <!-- Nav Item - Messages -->
            
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Logout</span>
                <img class="img-profile rounded-circle" src="img/favicon.png">
              </a>
			 
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              
                
                <div class="dropdown-divider"></div>
                
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                   <a href="index.php?logout"> Logout </a>
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Register Records.</h1>
          <p class="mb-4">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Patients</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
					
                      <th>Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Phone</th>
					  <th>Address</th>
					  <th>City</th>
					  <th>State</th>
					  <th>Code</th>
					  <th>Country</th>
					  <th>IN</th>
					  <th>Out</th>
					  <th>Patient</th>
					  <th>Emergency</th>
					  <th>Field</th>
					  <th>appnt</th>
					  <th>Message</th>
                    </tr>
                  </thead>
                  <tbody>
				  
                    <?php
						
						$sql = "SELECT * from formm";
						$query = mysqli_query($conn, $sql);
						while($result = mysqli_fetch_assoc($query))
						{
							/*$id = $result['P_key'];
							$date = $result['Name'];
							$fname = $result['Last-name'];
							$faname = $result['Father_name'];
							$faoccupation = $result['Father_occupation'];
							$address = $result['Address'];
							$cnic = $result['Cnic'];
							$additional = $result['Additional'];
							$code = $result['Code'];
							$phone = $result['Phone'];
							$email = $result['Email'];*/
							
							
		$id = $result['P_key'];					
	$name= $result['name'];
	$lastname= $result['lastname'];
	$email= $result['email'];
	$phone= $result['phone'];
	$address= $result['address'];
	$city= $result['city'];
	$state= $result['state'];
	$code= $result['code'];
	$country= $result['country'];
	$travel= $result['travel'];
	$return= $result['returnn'];
	$adult= $result['adult'];
	$kids= $result['kids'];
	$tour= $result['tour'];
	$book= $result['book'];
	$message= $result['msg'];
							
							
							
							
							
							echo "
								<tr>
								  <td>$name</td>
								  <td>$lastname</td>
								  <td>$email</td>
								  <td>$phone</td>
								  <td>$address</td>
								  <td>$city</td>
								  <td>$state</td>
								  <td>$code</td>
								  <td>$country</td>
								  <td>$travel</td>
								  <td>$return</td>
								  <td>$adult</td>
								  <td>$kids</td>
								  <td>$tour</td>
								  <td>$book</td>
								  <td>$message</td>
								  
								  <td> <a href='register.php?delete=$id'> Delete </a> </td>
								</tr>
							";
						}
					 ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>ibrahimzia44@gmail.com</span>          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
</body>
</html>
