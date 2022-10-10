<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="assets/Questions/core/core.css">
	<!-- endinject -->

	<!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/Questions/bootstrap-datepicker/bootstrap-datepicker.min.css">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="assets/Questions/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="assets/css/demo1/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="assets/images/favicon.png" />

    <style>
      body{background: url('assets/images/signupbg.jpg'); background-size: cover;  }
    
    </style>

</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_POST['register'])) {
        // removes backslashes
        $username = stripslashes($_POST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $name    = stripslashes($_POST['name']);
        $name    = mysqli_real_escape_string($con, $name);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);
       
        $organization = stripslashes($_POST['organization']);
        $organization = mysqli_real_escape_string($con, $organization);
        $phone = stripslashes($_POST['phone']);
        $phone = mysqli_real_escape_string($con, $phone);
        $membership = stripslashes($_POST['membership']);
        $membership = mysqli_real_escape_string($con, $membership);
        $membershiptype = stripslashes($_POST['membershiptype']);
        $membershiptype = mysqli_real_escape_string($con, $membershiptype);
        $membershipnumber = stripslashes($_POST['membershipnumber']);
        $membershipnumber = mysqli_real_escape_string($con, $membershipnumber);
        $transactionnumber = stripslashes($_POST['transactionnumber']);
        $transactionnumber = mysqli_real_escape_string($con, $transactionnumber);
       
        $query    = "INSERT into `users` (username, name, password,   organization, phone, membership, membershiptype, membershipnumber, transactionnumber, filename, );
                     VALUES ('$username', '$name',  '" . md5($password) . "',   '$organization', '$phone', '$membership', '$membershiptype', '$membershipnumber', '$transactionnumber', '$filename',)";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
<?php
    }
?>

<div class="main-wrapper">

  <div class="full-page">

    <div class="page-content d-flex align-items-center justify-content-center">

      <div class="row w-100 mx-0 auth-page">
        <div class="col-md-12 col-xl-8 mx-auto">
          <div class="text-center mb-2"> <img height="100" src="assets/images/logo.png" /></div>
          <div class="card shadow">
            <div class="row">

              <div class="col-md-12 ps-md-0">
                <div class="auth-form-wrapper px-5 py-3">
                  <a href="#" class="noble-ui-logo text-center d-block mb-2">Immunocon <span
                      class="text-sucess">BHU</span></a>
                  <h5 class="text-muted fw-normal text-center mb-4">Please read the instructions before filling the
                    register form <a href="/dashboard"><strong> Click here</strong></a></h5>

                   <span><strong>*Mandatory fields</strong></span>
 
                  <form class="form" action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="mb-3 col-md-6">
                        <label for="name" class="form-label">Name*</label>
                        <input required type="text" class="form-control" id="name" placeholder="Name" name="name" >
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">Email*</label>
                        <input required type="email" class="form-control" id="email" placeholder="Email" name="username">
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="organization" class="form-label">Organization*
                        </label>
                        <input required type="text" class="form-control" id="organization" placeholder="Organization" name="organization">
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="contactdetails" class="form-label">Phone No.*</label>
                        <input required type="text" class="form-control" id="contactdetails" placeholder="Phone No." name="phone">
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="membershipnumber" class="form-label">Create Password*
                        </label>
                        <input required type="text" class="form-control" id="transaction_number" placeholder="Password" name="password">
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="membership" class="form-label">Membership*
                        </label>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-check">
                              <input type="radio" class="form-check-input" name="membership" id="chkYes" onclick="ShowHideDiv()" value="IIS Member">
                              <label class="form-check-label" for="radioDefault">
                                IIS- member
                              </label>
                            </div>
                            </div>

                        
                          <div class="col-md-6">
                            <div class="form-check">
                              <input type="radio" class="form-check-input" name="membership" id="chkYes2" onclick="ShowHideDiv()" value="Non IIS- member">
                              <label class="form-check-label" for="radioDefault">
                                Non IIS- member
                              </label>
                            </div>
                          </div>
                         
						  </div>
                      

                        <div class="row mt-2" style="display:none;" id="dvtext">
                          <div style="display:inline;" class="col-md-6">
                          <input type="radio" class="form-check-input" name="membershiptype"  value="Student">
                              <label class="form-check-label" for="radioDefault">
                               Student
                              </label>
                        </div>
                        <div class="col-md-6">
                              <input type="radio" class="form-check-input" name="membershiptype"   value="Faculty Member">
                              <label class="form-check-label" for="radioDefault">
                               Faculty Member
                              </label>
                              
                          </div>
                          
                    
                       

                      </div>
						  </div>


                      <div class="mb-3 col-md-6">
                        <label for="membershipnumber" class="form-label">Membership Number
                        </label>
                        <input type="text" class="form-control" id="membershipnumber" placeholder="Membership Number" name="membershipnumber" >
                      </div>

                      <div class="mb-3 col-md-6">
                        <label for="transactionnumber" class="form-label">Transaction Number*
                        </label>
                        <input type="text" class="form-control" id="transactionnumber" placeholder="Transaction Number" name="transactionnumber">
                      </div>
                      

                      <div class="mb-3 col-md-6">

                        <label class="form-label" for="formFile">Upload Transaction Screenshot*</label>
                        <input name="upload" class="form-control" type="file" id="formFile" >
                      </div>

                    </div>


                    <input type="submit" name="register" value="Register" class="btn btn-primary text-white me-2 mb-2 mb-md-0">
                    <a href="login.php" class="d-block mt-1 text-muted">Already a user? Sign in</a>
                   
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

<script>
function ShowHideDiv() {
        var chkYes = document.getElementById("chkYes");
        var chkYes2 = document.getElementById("chkYes2");
        var dvtext = document.getElementById("dvtext");
        dvtext.style.display = chkYes.checked ? "block" : "block";
        dvtext.style.display = chkYes2.checked ? "block" : "block";
        
    }

</script>

</body>
</html>
