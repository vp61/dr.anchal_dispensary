<?php
include "db.php";

if(isset($_POST['fname'])){
$mobile= mysqli_real_escape_string($con,$_POST['mobile']);
$fname= mysqli_real_escape_string($con,$_POST['fname']);
$lname= mysqli_real_escape_string($con,$_POST['lastname']);
$email= mysqli_real_escape_string($con,$_POST['email']);
$cpassword= mysqli_real_escape_string($con,$_POST['cpassword']);
$password= mysqli_real_escape_string($con,$_POST['password']);

$pass = password_hash($password, PASSWORD_DEFAULT);
$fullname=$fname." ".$lname;

$dep1=mysqli_query($con,"SELECT * FROM `login_role` where email='$email'");
$chec=mysqli_num_rows($dep1);
if($chec>0){
    echo json_encode(2);
}else{


$dep=mysqli_query($con,"SELECT ifnull(max(id),0) as id FROM `user_details`");
$ro=mysqli_fetch_array($dep);
$id=$ro['id']+1;
$sql="INSERT INTO `user_details`( `firstname`, `lastname`, `mobile`, `email`, `password`, `cpassword`, `status`) 
VALUES ('$fname','$lname','$mobile','$email','$pass','$pass','1')";
 mysqli_query($con,$sql);
$eem="INSERT INTO `login_role`(`regid`, `name`, `email`, `password`, `status`)
 VALUES ('$id','$fullname','$email','$pass','1')";
 mysqli_query($con,$eem);
 echo json_encode(1);

}
}












?>