<?php
include 'db.php';


if(isset($_POST['title'])){
    $title=$_POST['title'];
    $discription=$_POST['discription'];
    $course=$_POST['course'];
 
    $image = $_FILES['video']['name'];
    $imagePath = 'thumbnail/'.$image;
    $tmp_name = $_FILES['video']['tmp_name'];
    move_uploaded_file($tmp_name, $imagePath);
    
    
    
    $sql="INSERT INTO `questionbank`( `catid`, `question`, `answer`, `image`, `status`)
     VALUES ('$course','$title','$discription','$imagePath','1')";
    mysqli_query($con,$sql);
    
    echo json_encode('success');
    
    };