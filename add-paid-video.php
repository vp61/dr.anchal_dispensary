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
  <meta name="description" content="Aqua Green">
	 
	 

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
  <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="assets/css/demo1/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="assets/images/favicon.png" />
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
			<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					 
					<ul class="navbar-nav">
					 
					 
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="bell"></i>
								<div class="indicator">
									<div class="circle"></div>
								</div>
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
								<div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
									<p>6 New Notifications</p>
									<a href="javascript:;" class="text-muted">Clear all</a>
								</div>
                <div class="p-1">
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
											<i class="icon-sm text-white" data-feather="gift"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>New Order Recieved</p>
											<p class="tx-12 text-muted">30 min ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
											<i class="icon-sm text-white" data-feather="alert-circle"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>Server Limit Reached!</p>
											<p class="tx-12 text-muted">1 hrs ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>New customer registered</p>
											<p class="tx-12 text-muted">2 sec ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
											<i class="icon-sm text-white" data-feather="layers"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>Apps are ready for update</p>
											<p class="tx-12 text-muted">5 hrs ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
											<i class="icon-sm text-white" data-feather="download"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>Download completed</p>
											<p class="tx-12 text-muted">6 hrs ago</p>
                    </div>	
                  </a>
                </div>
								<div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
								<div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
									<div class="mb-3">
										<img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80" alt="">
									</div>
									<div class="text-center">
										<p class="tx-16 fw-bolder">Dr anchals</p>
										<p class="tx-12 text-muted">dranchals@gmail.com</p>
									</div>
								</div>
                <ul class="list-unstyled p-1">
                  <li class="dropdown-item py-2">
                    <a href="pages/general/profile.html" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="user"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="edit"></i>
                      <span>Edit Profile</span>
                    </a>
                  </li>
                  
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="log-out"></i>
                      <span>Log Out</span>
                    </a>
                  </li>
                </ul>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- partial -->



			<?php





    if(isset($_POST['submit'])){
        $coursename= mysqli_real_escape_string($con,$_POST['coursename']);
        $discription= mysqli_real_escape_string($con,$_POST['discription']);
        $courseprice= mysqli_real_escape_string($con,$_POST['courseprice']);
        $videoid= mysqli_real_escape_string($con,$_POST['videoid']);
        $uid= mysqli_real_escape_string($con,$_POST['uid']);
       
        $image = $_FILES['video']['name'];
        $imagePath1 = 'api/thumbnail/'.$image;
        $imagePath = 'thumbnail/'.$image;
        $tmp_name = $_FILES['video']['tmp_name'];
        move_uploaded_file($tmp_name, $imagePath1);
        $date=date('Y-m-d');
    
    
        
        if($uid==0){
        
            
        
        
        $eem="INSERT INTO `paidvideo`( `name`,`videoid`, `discription`, `thumbnail`, `price`, `status`) 
        VALUES ('$coursename','$discription','$videoid','$imagePath','$courseprice','1')";
         mysqli_query($con,$eem);
         echo json_encode(1);
        }else{
            if(isset($_FILES['video']['name'])  && ($_FILES['video']['name']!="") ){
                $image = $_FILES['video']['name'];
                $imagePath = 'thumbnail/'.$image;
                $tmp_name = $_FILES['video']['tmp_name'];
                move_uploaded_file($tmp_name, $imagePath);
    $imsql=" , `thumbnail`='$imagePath' ";
    
            }else{
                $imsql=" ";
            }
    
    
        $ast="UPDATE `paidvideo` SET `name`='$coursename',`discription`='$discription' ,`price`='$courseprice' , `videoid`='$videoid' $imsql   WHERE id='$uid'";
        mysqli_query($con,$ast);
        echo json_encode(1);
        }
         
        echo '<script> window.location.href = "add-paid-video.php"; </script>';
        
        }



if(isset($_GET['edit'])){

$cid1=$_GET['edit'];

$sql1 = mysqli_query($con, "SELECT * FROM `paidvideo` where id='$cid1'");


$ceck =  mysqli_num_rows($sql1);

if ($ceck > 0) {

$row=mysqli_fetch_array($sql1);

 

	$subject=     $row['name'] ; 
	$description=   $row['discription'] ; 
	$demovideoid=  $row['videoid'] ; 
	$image=    $row['thumbnail'] ; 
    $prices=    $row['price'] ; 
$checkupdate=$cid1;


}
}else{

	$checkupdate=0;
	$subject=     "";
	$description=   "";
	$prices=  "";
	$image=    "";
    $demovideoid="";
}



?>



			<div class="page-content">
				
				
				<div class="row">
					<div class="col-md-12 stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title"><i data-feather="plus"></i> Add Vimeo</h6>
									<form method="post" action="" enctype="multipart/form-data">
										<div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Video Title</label>
													<input type="text" name='coursename' value="<?php echo $subject ?>" class="form-control" placeholder="Video Title">
												</div>
											</div><!-- Col -->

                                            <div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Vimeo Video Id</label>
													<input type="text" name='videoid' value="<?php echo $demovideoid ?>" class="form-control" placeholder="Vimeo Video Id">
												</div>
											</div><!-- Col -->
										
											<input type="hidden" value="<?php echo $checkupdate ?>" name="uid">
										</div><!-- Row -->
										<div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Description</label>
													<textarea  cols="130" rows="3" name="discription"><?php echo $description ?>  </textarea>

												</div>
											</div><!-- Col -->
										
										
										</div><!-- Row -->
									
										<div class="row">
                                        <div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Image (thumbnail)</label>
													<input type="file" name='video'  class="form-control" >

												</div>
											</div><!-- Col -->

											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Video Price </label>
													<input type="number" class="form-control" placeholder="Price" value="<?php echo $prices ?>" name="courseprice" id="">

				</div>
			</div><!-- Col -->
										
										
										</div><!-- Row -->


									




										<input type="submit" name='submit' value="Submit form" class="btn btn-primary submit">
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