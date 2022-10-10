<?php
include 'db.php';

if(isset($_POST['cid'])){
$cid = $_POST['cid'];
    $data=array();
$sql1="SELECT * FROM user_details  where id='$cid' ";
$am=   mysqli_query($con,$sql1);
while($row= mysqli_fetch_assoc($am)){
$data[]=$row;
};

echo json_encode($data);
}

if(isset($_POST['update'])){
    $fistname= mysqli_real_escape_string($con,$_POST['fistname']);
    $lastname= mysqli_real_escape_string($con,$_POST['lastname']);
    $gender= mysqli_real_escape_string($con,$_POST['gender']);
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $mobile= mysqli_real_escape_string($con,$_POST['mobile']);
    $uid= mysqli_real_escape_string($con,$_POST['uid']);
if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=""){
    $image = $_FILES['image']['name'];
    $imagePath = 'image/'.$image;
    $tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name, $imagePath);
    $imgupd=" `image`='$imagePath',  ";
 
}else{
    $imgupd="   ";
}
    $date=date('Y-m-d');

$sql="UPDATE `user_details` SET `firstname`='$fistname',`lastname`='$lastname',`mobile`='$mobile', $imgupd  `email`='$email',`gender`='$gender' WHERE id='$uid'";

    mysqli_query($con,$sql);


}