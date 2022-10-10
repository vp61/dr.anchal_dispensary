<?php
include "db.php";
if(isset($_POST['id'])){

$id=$_POST['id'];


$result1 = "SELECT * FROM `venderproduct` where vpid='$id'" ;
$results1 = mysqli_query($con, $result1);
$row1 = mysqli_fetch_array($results1);


echo json_encode($row1);
}


if(isset($_POST['deletes'])){

    $id=$_POST['deletes'];
    
    
    $result1 = "DELETE FROM `venderproduct` where vpid='$id'" ;
    $results1 = mysqli_query($con, $result1);

    echo json_encode('delete');
    
    
    }