<?php
include "db.php"; 
if(isset($_POST['email'])){
$pass=mysqli_real_escape_string($con, $_POST['pass']);
$email= mysqli_real_escape_string($con,$_POST['email']);

$sql1 = mysqli_query($con, "SELECT * from `login_role` where `email`='$email' and  `password`='$pass' ");


$ceck =  mysqli_num_rows($sql1);

if ($ceck > 0) {
$stl="SELECT * FROM `login_role` WHERE `email`='$email'";
$sql2 = mysqli_query($con, $stl);
$row=mysqli_fetch_array($sql2);

    
$data['check']=$row['status'];
$data['regid']=$row['regid'];
$data['user']=$row['name'];
}else{
    $data['check']=0;
}

echo json_encode($data);

}