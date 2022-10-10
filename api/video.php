<?php
include 'db.php';


if(isset($_POST['title'])){
    $title=$_POST['title'];
    $discription=$_POST['discription'];
    $course=$_POST['course'];
    $imagebyt=$_POST['imagebyt'];
    $image = $_FILES['video']['name'];
    $imagePath = 'uploads/'.$image;
    $tmp_name = $_FILES['video']['tmp_name'];
    move_uploaded_file($tmp_name, $imagePath);
    
    
    
    $sql="INSERT INTO `videos`( `video_titel`, `discription`, `videopath`, `videothumble`, `showhide`, `courseid`) 
    VALUES ('$title','$discription','$imagePath','$imagebyt','1','$course')";
    mysqli_query($con,$sql);
    
    echo json_encode('success');
    
    };