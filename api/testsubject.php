<?php
include 'db.php';

if(isset($_POST['showdata'])){

    $data=array();
$sql1="SELECT * FROM `subjects` ";
$am=   mysqli_query($con,$sql1);
while($row= mysqli_fetch_assoc($am)){
$data[]=$row;
};

echo json_encode($data);
}