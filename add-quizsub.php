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
	<link rel="stylesheet" href="assets/Questions/core/core.css">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="assets/Questions/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="assets/css/demo1/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="/assets/images/favicon.png" />
</head>
<body>
	<div class="main-wrapper">
<!-- partial:partials/_sidebar.html -->
<?php
include "header.php";
  ?>
   
		<!-- partial -->
	
		<div class="page-wrapper">
				
			<!-- partial:partials/_navbar.html -->
			<?php
include "header.php";
  ?>
			<!-- partial -->


<?php


if(isset($_POST['submit'])){

	$name=mysqli_real_escape_string($con, $_POST['name']);
	$discription=mysqli_real_escape_string($con, $_POST['discription']);

	$cprice=mysqli_real_escape_string($con, $_POST['cprice']);
	$update=mysqli_real_escape_string($con, $_POST['update']);

	$sql1 = mysqli_query($con, "SELECT * FROM `subjects` WHERE  `subject`='$name' ");
	$vid=0;
	
	$ceck =  mysqli_num_rows($sql1);

	if ($ceck > 0) {

if($update==1){
	$cid1=$_GET['edit'];

	mysqli_query($con,"UPDATE `subjects` SET `subject`='$name', `description`='$discription' , `prices`='$cprice', `image`='$image' WHERE  id='$cid1'");

	echo '<script> window.location.href = "view-subject.php"; </script>';

}




	}else{
		echo $_FILES['image']['name'];
	    if($_FILES['image']['name']){
			$ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

			$valid_ext = array("png","jpeg","jpg");

		
		    if(in_array($ext, $valid_ext)){

            move_uploaded_file($_FILES['image']['tmp_name'], "api/image/".$_FILES['image']['name']);
            $img="image/".$_FILES['image']['name'];
			

			mysqli_query($con, "INSERT INTO `subjects`( `subject`, `description`, `image`, `prices`, `status`)
			VALUES ('$name','$discription','$img','$cprice','1')");

			}else{
				echo " <h3>Upload Only png , jpeg , jpg </h3>";
			}

			
        }else{
			echo " <h3>Please Upload Image</h3>";
		}
	
	

	
	}
	
	}


if(isset($_GET['edit'])){

$cid1=$_GET['edit'];

$sql1 = mysqli_query($con, "SELECT * FROM `subjects` where id='$cid1'");


$ceck =  mysqli_num_rows($sql1);

if ($ceck > 0) {

$row=mysqli_fetch_array($sql1);

 

	$subject=     $row['subject'] ; 
	$description=   $row['description'] ; 
	$prices=  $row['prices'] ; 
	$image=    $row['image'] ; 

$checkupdate=1;


}
}else{

	$checkupdate=2;
	$subject=     "";
	$description=   "";
	$prices=  "";
	$image=    "";

}

	
	?>		

			<div class="page-content">
				
				
				<div class="row">
					<div class="col-md-12 stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Add Subject</h6>
									<form method="post" action="" enctype="multipart/form-data">
										<div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Name</label>
													<input type="text" name="name" value="<?php echo $subject  ?>" class="form-control" placeholder="Enter Name">
                                               <input type="hidden" value="<?php echo $checkupdate ?>" name="update">

												</div>
											</div><!-- Col -->
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Short Description</label>
													<input type="text" name="discription" value="<?php echo $description  ?>" class="form-control" placeholder="Short Description">
												</div>
											</div><!-- Col -->
										


										</div><!-- Row -->
										<div class="row">
										
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Price</label>
													<input type="number" name="cprice" value="<?php echo $prices  ?>" class="form-control" placeholder="Price">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Choose Image</label>
													<input type="file" name="image" value="<?php echo $image  ?>" class="form-control" placeholder="price">
												</div>
											</div><!-- Col -->
										
										</div><!-- Row -->
										<input type="submit" name='submit' value="Submit" class="btn btn-primary submit">
									</form>
									
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

	<script src="assets/vendors/core/core.js"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="assets/vendors/chartjs/Chart.min.js"></script>
  <script src="assets/vendors/jquery.flot/jquery.flot.js"></script>
  <script src="assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
  <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="assets/vendors/feather-icons/feather.min.js"></script>
	<script src="assets/js/template.js"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="assets/js/dashboard-light.js"></script>
  <script src="assets/js/datepicker.js"></script>

	<!-- Custom js for this page -->
  <!-- End custom js for this page -->
</body>
</html>