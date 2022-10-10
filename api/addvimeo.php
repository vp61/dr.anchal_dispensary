<?php
include 'db.php';


if(isset($_POST['title'])){
    $title=$_POST['title'];
    $discription=$_POST['discription'];
    $course=$_POST['course'];
    $vimoid=$_POST['vimoid'];
    $image = $_FILES['video']['name'];
    $imagePath = 'thumbnail/'.$image;
    $tmp_name = $_FILES['video']['tmp_name'];
    move_uploaded_file($tmp_name, $imagePath);
    
    
    
    $sql="INSERT INTO `videos`( `video_titel`, `discription`, `videopath`, `videothumble`, `showhide`, `courseid`) 
    VALUES ('$title','$discription','$vimoid','$imagePath','2','$course')";
   
    mysqli_query($con,$sql);
    
    echo json_encode('success');
    
    };