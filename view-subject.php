<?php
include "db.php"; 
if(isset($_SESSION['users234']) && isset($_SESSION['usersname']) ){
}else{
  echo '<script> window.location.href = "index.php"; </script>';

}

?>

<!DOCTYPE html>
 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
   
	 

	<title>Dr Anchals</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="assets/vendors/core/core.css">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
	
	<!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
	<!-- End plugin css for this page -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="assets/css/demo1/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="/assets/images/favicon.png" />
</head>
<body>
	<div class="main-wrapper">
<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Aqua<span class="text-success">Green</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
             <a href="dashboard.php" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Subject</li>
          <li class="nav-item">
           <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="user-plus"></i>
              <span class="link-title">Subject</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="view-vendor.php" class="nav-link">View Vendor</a>
                </li>
                <li class="nav-item">
                  <a href="add-vendor.php" class="nav-link">Add Vendor</a>
                </li>
				   <li class="nav-item">
                  <a href="vendor-send-link" class="nav-link">Send Link</a>
                </li>
				    <li class="nav-item">
                  <a href="vendor-send-invoice.html" class="nav-link">Send Invoice</a>
                </li>
                
              </ul>
            </div>
          </li>
        
          <li class="nav-item nav-category">Subject</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">Customer</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="uiComponents">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="view-customer.php" class="nav-link">View Subject</a>
                </li>
                <li class="nav-item">
                  <a href="add-customer.php" class="nav-link">Add Subject</a>
                </li>
				   <li class="nav-item">
                  <a href="customer-send-link.html" class="nav-link">Send Link</a>
                </li>
				    <li class="nav-item">
                  <a href="customer-send-invoice.html" class="nav-link">Send Invoice</a>
                </li>
                
              </ul>
            </div>
          </li>
         
       
       
       
           
          <li class="nav-item nav-category">Add Subject</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false" aria-controls="general-pages">
              <i class="link-icon" data-feather="book"></i>
              <span class="link-title">Subject</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="viewpandingvender.php" class="nav-link">View Subject</a>
                </li>
                <li class="nav-item">
                  <a href="viewRejectvender.php" class="nav-link">View Subject </a>
                </li> 
				   
               
              </ul>
            </div>
          </li>
           
        </ul>
      </div>
    </nav>
   
		<!-- partial -->
	
		<div class="page-wrapper">
				
			<!-- partial:partials/_navbar.html -->
			<?php
include "header.php";
  ?>
			<!-- partial -->

			<div class="page-content">
				
				<div class="row">
				<div class="col-md-12 text-right mb-3"><a class="btn btn-success" href="add-quizsub.php"><i data-feather="plus"></i> Add Subject</a></div>
				</div>
				
				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">View Subject</h6>
                 
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Subject</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                      
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>


<?php

if(isset($_GET['delete'])){
	$cid1=$_GET['delete'];

	mysqli_query($con, "DELETE FROM `subjects` where id='$cid1'");
}









$sql1 = mysqli_query($con, "SELECT * FROM `subjects`");


$ceck =  mysqli_num_rows($sql1);

if ($ceck > 0) {

while($row=mysqli_fetch_array($sql1)){

 

?>





                    
                      <tr>
                        <td><?php  echo $row['subject']  ?></td>
                        <td><?php  echo $row['description']  ?></td>
                        <td><?php  echo $row['prices']  ?></td>
                        <td><img src="<?php  echo $row['image']  ?>"  ></td>
                      
                        <td><a class="font-12" href="add-quizsub.php?edit=<?php echo $row['id'] ;?>"><i data-feather="edit"></i> </a>  <a class="font-12" href="?delete=<?php echo $row['id'] ;?>"><i data-feather="archive"></i> </a> </td>
                      </tr>


<?php  
}
}

?>


                    
                       
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>


			</div>

			<!-- partial:../../partials/_footer.html -->
			<!-- partial:partials/_footer.html -->
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
				<p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.sarthaktech" target="_blank">Sarthak tech</a>.</p>
				<p class="text-muted">Design & Developed by  <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i> Sarthak tech</p>
			</footer>
			<!-- partial -->
			<!-- partial -->
	
		</div>
	</div>

	<!-- core:js -->
	<script src="assets/vendors/core/core.js"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->

	<!-- Plugin js for this page -->
  <script src="assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="assets/vendors/feather-icons/feather.min.js"></script>
	<script src="assets/js/template.js"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="assets/js/data-table.js"></script>
	<!-- End custom js for this page -->

	<!-- Custom js for this page -->
  <!-- End custom js for this page -->
</body>
</html>