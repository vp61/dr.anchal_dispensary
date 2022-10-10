<?php
include "db.php";

if(isset($_POST['name'])){
$mobile= mysqli_real_escape_string($con,$_POST['mobile']);
$name= mysqli_real_escape_string($con,$_POST['name']);
$email= mysqli_real_escape_string($con,$_POST['email']);
$address= mysqli_real_escape_string($con,$_POST['address']);
$dental= mysqli_real_escape_string($con,$_POST['dental']);
$percentage= mysqli_real_escape_string($con,$_POST['percentage']);
$password= mysqli_real_escape_string($con,$_POST['password']);
$gender= mysqli_real_escape_string($con,$_POST['gender']);
$checkstuden= mysqli_real_escape_string($con,$_POST['checkstuden']);
$crrentbatch= mysqli_real_escape_string($con,$_POST['crrentbatch']);
$category= mysqli_real_escape_string($con,$_POST['category']);
$course= mysqli_real_escape_string($con,$_POST['course']);


$dep1=mysqli_query($con,"SELECT * FROM `registeration` where email='$email'");
$chec=mysqli_num_rows($dep1);
if($chec>0){}else{


$dep=mysqli_query($con,"SELECT ifnull(max(id),0) as id FROM `registeration`");
$ro=mysqli_fetch_array($dep);
$id=$ro['id']+1;
$sql="INSERT INTO `registeration`(`id`, `name`, `email`, `wmobile`, `address`, `gender`, `dentalcollege`, `checkstudant`, `creentbatch`, `category`, `percentage`, `courseid`, `password`, `status`) 
                          VALUES ('$id','$name','$email','$mobile','$address','$gender','$dental','$checkstuden','$crrentbatch','$category','$percentage','$course','$password','Active')";
 mysqli_query($con,$sql);
$eem="INSERT INTO `login_role`(`regid`, `name`, `email`, `password`, `status`)
 VALUES ('$id','$name','$email','$password','1')";
 mysqli_query($con,$eem);
 echo json_encode($id);

}
}












?>