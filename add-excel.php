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
  <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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








			<div class="page-content">
				
			
				<div class="row">
					<div class="col-md-12 stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title"><i data-feather="plus"></i> Add Quiz</h6>
									
										
										
									
										<div class="row">
                                        <div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Choose Subject </label>
													<select class="form-control"  name="tname" id="subject">
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


											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Answer Choose</label>
                                                    <input class="form-control" id="excel_file"  type="file" name="doc"/>
												</div>
											</div><!-- Col -->

											</div>
											<div class="row">
										
										<!-- Row -->
										<div class="col-sm-6">
										<a href="PHPExcel/Amajeet.xlsx">Download excel format </a>
										</div>
										<div class="col-sm-6">
										<button style="width:200px;display:block;margin:auto;" class="btn btn-success btn-sm" onclick="savefunc()">save</button>
										</div>
										
</div>
									<body>
   
    
        <div id="excel_data" class="mt-5"></div>
  
</body>
</html>

<script>
var lenghtex=0;
function savefunc(){
var  subject= $('#subject').val()
if(subject==""){
	alert('Please Select subject')
}else{
for(var i = 0; i < lenghtex; i++)
            {
                var  qno= $('#exc0'+i).val();
                var  question= $('#exc1'+i).val();
                var  answer= $('#exc2'+i).val();
                var  correct= $('#exc3'+i).val();

                $.ajax({

method: 'POST',
url: 'saveexcel.php',
data: {
    qno: qno,
    question:question,
    answer:answer,
    correct:correct,
    subject:subject,


},
dataType: 'json',
success: function(data) {



}
});
     }  
 }


alert('Your Excel Import');
window.location.href = "add-excel.php";
}



const excel_file = document.getElementById('excel_file');

excel_file.addEventListener('change', (event) => {

    if(!['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-excel'].includes(event.target.files[0].type))
    {
        document.getElementById('excel_data').innerHTML = '<div class="alert alert-danger">Only .xlsx or .xls file format are allowed</div>';

        excel_file.value = '';

        return false;
    }

    var reader = new FileReader();

    reader.readAsArrayBuffer(event.target.files[0]);

    reader.onload = function(event){

        var data = new Uint8Array(reader.result);

        var work_book = XLSX.read(data, {type:'array'});

        var sheet_name = work_book.SheetNames;

        var sheet_data = XLSX.utils.sheet_to_json(work_book.Sheets[sheet_name[0]], {header:1});
	
       
       
        lenghtex=sheet_data.length;

        if(sheet_data.length > 0)
        {
            var table_output = '<table class="table table-striped table-bordered">';

            for(var row = 0; row < sheet_data.length; row++)
            {

                table_output += '<tr>';

                for(var cell = 0; cell < sheet_data[row].length; cell++)
                {

                    if(row == 0)
                    {

                        table_output += '<th>'+sheet_data[row][cell]+'</th>';

                    }
                    else
                    {
if(sheet_data[row][cell]==undefined){
     var srt="";
}else{
    var srt=sheet_data[row][cell];  
}



                        table_output += '<td id=""> <input value="'+srt+'" type="hidden" id="exc'+cell+row+'">'+srt+'</td>';

                    }

                }

                table_output += '</tr>';

            }

            table_output += '</table>';

            document.getElementById('excel_data').innerHTML = table_output;
        }

        excel_file.value = '';

    }

});

</script>
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