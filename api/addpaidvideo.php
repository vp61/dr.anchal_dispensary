<?php
include 'db.php';


if(isset($_POST['title'])){
    $title=$_POST['title'];
    $discription=$_POST['discription'];
  
    $vimoid=$_POST['vimoid'];
    $price=$_POST['price'];
    $image = $_FILES['video']['name'];
    $imagePath = 'thumbnail/'.$image;
    $tmp_name = $_FILES['video']['tmp_name'];
    move_uploaded_file($tmp_name, $imagePath);
    
    
    
    $sql="INSERT INTO `paidvideo`( `name`,`videoid`, `discription`, `thumbnail`, `price`, `status`) 
    VALUES ('$title','$discription','$vimoid','$imagePath','$price','1')";
    mysqli_query($con,$sql);
    
    echo json_encode('success');
    
    };