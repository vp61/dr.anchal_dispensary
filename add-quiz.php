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



													if (isset($_POST['submit'])) {
														$tname = $_POST['tname'];
														$question = $_POST['question'];

														$correct = $_POST['correct'];
														$option = array();
														$option[1] = $_POST['option1'];
														$option[2] = $_POST['option2'];
														$option[3] = $_POST['option3'];
														$option[4] = $_POST['option4'];

														$dep=mysqli_query($con,"SELECT ifnull(max(id),0) as id FROM `question` where `subject`='$tname'");
														$ro=mysqli_fetch_array($dep);
														$id=$ro['id']+1;

														if($_FILES['image']['name']){
															$ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

															$valid_ext = array("png","jpeg","jpg");

														
															if(in_array($ext, $valid_ext)){

															move_uploaded_file($_FILES['image']['tmp_name'], "api/image/".$_FILES['image']['name']);
															$img="image/".$_FILES['image']['name'];
															$sts=2;
															}else{
																echo " <h3>Upload Only png , jpeg , jpg </h3>";
															}

															
														}else{
															$img=1;
															$sts=1;
														}




													
														$sql = "insert into question (id ,question,subject, `image`, `status`) value ('$id','$question','$tname','$img','$sts')";
														$res = mysqli_query($con, $sql);
													
													
														foreach ($option as $option => $value) {
														$amar  =   $value;
														if (!$value  = "") {
															if ($correct == $option) {
															$correct_option = 1;
															} else {
															$correct_option = 0;
															}
													
															if ($res) {
															$sql1 = "insert into answer (id,answer,correct,subject) value('$id','$amar','$correct_option','$tname')";
													
															$res1 = mysqli_query($con, $sql1);
														
															echo '<script> window.location.href = "add-quiz.php"; </script>';
															}
														}
														}
													}

													?>



			   <div class="page-content">
				
				
				   <div class="row">
					<div class="col-md-12 stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title"><i data-feather="plus"></i> Add Question</h6>
									<form method="post" action="" enctype="multipart/form-data">
										<div class="row">
											<div class="col-sm-12">
												<div class="mb-3">
													<label class="form-label">Question</label>
													<input type="text" name='question' value="" class="form-control" placeholder="Question">
												</div>
											</div><!-- Col -->
										
											<input type="hidden" value="" name="update">
										</div><!-- Row -->
										<div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Option 1</label>
													<input type="text" name='option1' value="" class="form-control" placeholder="Option 1">

												</div>
											</div><!-- Col -->
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Option 2</label>
													<input type="text" name='option2' value="" class="form-control" placeholder="Option 2">
												</div>
											</div><!-- Col -->
										
										</div><!-- Row -->
										<div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Option 3</label>
													<input type="text" name='option3' value="" class="form-control" placeholder="Option 3">
												</div>
											</div><!-- Col -->
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Option 4</label>
													<input type="text" name='option4' value="" class="form-control" placeholder="Option 4">
												</div>
											</div><!-- Col -->
										
										</div><!-- Row -->
										<div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Answer Choose</label>
																								<select class="form-control" name="correct" id="">
															<option value="1">option 1</option>
															<option value="2">option 2</option>
															<option value="3">option 3</option>
															<option value="4">option 4</option>
															</select>
												</div>
											</div><!-- Col -->

											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Choose Subject </label>
													<select class="form-control" name="tname" id="">
													<?php
													$query = "SELECT * FROM `subjects` ORDER BY id DESC  ";
												$queryfire = mysqli_query($con, $query);

												$num = mysqli_num_rows($queryfire);

												if ($num > 0) {
												while($item = mysqli_fetch_array($queryfire)){
												print_r($item);
												?>
														<option value="<?php echo $item['id'] ?>"><?php echo $item['subject'] ?></option>

														<?php
												}
												}
																		?>
						</select>
								</div>
							</div><!-- Col -->
														
										
										</div><!-- Row -->


										<div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Image (Optional)</label>
													<input type="file" name='image'  class="form-control" placeholder="Option 1">

												</div>
											</div><!-- Col -->
											<div class="col-sm-6">
												<div class="mb-3">
													
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