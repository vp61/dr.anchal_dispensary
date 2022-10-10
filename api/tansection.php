<?php
include "db.php";

if(isset($_POST['regid'])){
$regid= mysqli_real_escape_string($con,$_POST['regid']);
$sname= mysqli_real_escape_string($con,$_POST['sname']);
$smobile= mysqli_real_escape_string($con,$_POST['smobile']);
$semail= mysqli_real_escape_string($con,$_POST['semail']);
$paymentmethod= mysqli_real_escape_string($con,$_POST['paymentmethod']);
$ptype= mysqli_real_escape_string($con,$_POST['ptype']);
$courseid= mysqli_real_escape_string($con,$_POST['courseid']);
$coursename= mysqli_real_escape_string($con,$_POST['coursename']);
$price= mysqli_real_escape_string($con,$_POST['price']);
$stutus= mysqli_real_escape_string($con,$_POST['stutus']);
$check= mysqli_real_escape_string($con,$_POST['check']);

$date=date('Y-m-d');





$eem="INSERT INTO `tarasection`( `sundentid`, `courseid`, `sname`, `cname`, `email`, `mobile`, `tarasectionid`, `pamentmethod`, `date1`, `status`)
 VALUES ('$regid','$courseid','$sname','$coursename','$semail','$smobile','$paymentmethod','$ptype','$date','$stutus')";
 mysqli_query($con,$eem);

 mysqli_query($con,"INSERT INTO `buycorce`( `courseid`, `studentid`, `confirm`) 
 VALUES ('$courseid','$regid','$check')");






 echo json_encode(1);

 


}