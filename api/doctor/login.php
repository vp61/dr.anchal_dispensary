<?php
include "db.php"; 
if(isset($_POST['email'])){
$pass=mysqli_real_escape_string($con, $_POST['password']);
$email= mysqli_real_escape_string($con,$_POST['email']);


$stl="SELECT * FROM `login_role` WHERE `email`='$email'";
$sql2 = mysqli_query($con, $stl);
$row=mysqli_fetch_array($sql2);
$verify = password_verify($pass, $row['password']);

if ($verify) {


$data['check']=$row['status'];
$data['regid']=$row['regid'];
$data['user']=$row['name'];

}else{
    $data['check']=0;
}

echo json_encode($data);

}