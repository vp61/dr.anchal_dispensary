<?php
include "db.php"; 
if(isset($_POST['regid'])){
$regid=mysqli_real_escape_string($con, $_POST['regid']);


$data=array();
$stl="SELECT wmobile,email FROM `registeration` WHERE `id`='$regid'";
$sql2 = mysqli_query($con, $stl);
while($row= mysqli_fetch_assoc($sql2)){
$data[]=$row;
};


echo json_encode($data);

}