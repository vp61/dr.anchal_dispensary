<?php
include "db.php"; 


if(isset($_POST['submit'])){
$email=mysqli_real_escape_string($con, $_POST['email']);
$password=mysqli_real_escape_string($con, $_POST['password']);


$sql1 = mysqli_query($con, "SELECT * FROM `login_role` WHERE  `email`='$email' and `password`='$password' and `status`='2'");


$ceck =  mysqli_num_rows($sql1);
echo $ceck;
if ($ceck > 0) {

$row=mysqli_fetch_array($sql1);

if(isset($_POST['authCheck'])){
setcookie("users234", '8382946376');
setcookie('usersname',$email);


}
$_SESSION['users234']='8382946376';
$_SESSION['usersname']=$email;


echo '<script> window.location.href = "dashboard.php"; </script>';
    
}else{
  $msg="User or Password Wrrong";
 
}

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

  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-5 pe-md-0">
                  <div class="auth-side-wrapper">

                  </div>
                </div>
                <div class="col-md-7 ps-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo d-block mb-2">Dr <span class="text-success">Anchals</span></a>
                    <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
                    <form method='post' action=""  class="forms-sample">
                      <div class="mb-3">
                        <label for="userEmail" class="form-label">User Id</label>
                        <input type="email" name='email' class="form-control" id="userId" placeholder="User Id">
                      </div>
                      <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" name='password' id="userPassword" autocomplete="current-password" placeholder="Password">
                      </div>
                      <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input"  name='authCheck'  id="authCheck">
                        <label class="form-check-label" for="authCheck">
                          Remember me
                        </label>

                     
                      </div>
                      <span style='color:red'><?php if(isset($msg)){ echo $msg; } ?></span>
                      <div>
                      <input type="submit" name="submit" value="Login" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">
                        
                      </div>
                      <a href="register.html" class="d-block mt-3 text-muted">Not a user? Sign up</a>
                    </form>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="assets/Questions/core/core.js"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="assets/Questions/feather-icons/feather.min.js"></script>
	<script src="assets/js/template.js"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
	<!-- End custom js for this page -->

</body>
</html>