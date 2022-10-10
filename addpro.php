<?php


include "db.php";
if(isset($_POST['proname'])){
$proname   = $_POST['proname'];
$discription   = $_POST['discription'];
$priprice     =$_POST['priprice'];
$minqty   = $_POST['minqty'];
$pid   = $_POST['pid'];
$date=date('Y-m-d');

if($pid==0){





   // File name
   $filename = $_FILES['files']['name'][0];
   $upload_location = "api/upload/";
   // Get extension
   $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

   // Valid image extension
   $valid_ext = array("png","jpeg","jpg");

   // Check extension
  // if(in_array($ext, $valid_ext)){

      // File path
      $path = $upload_location.$filename;

      // Upload file
    move_uploaded_file($_FILES['files']['tmp_name'][0],$path);
     
   //}



   $cpl="INSERT INTO `venderproduct`( `vpname`, `vpprice`, `discription`, `vpimage`, `minqty`, `status`) 
   VALUES ('$proname','$priprice','$discription','$path','$minqty','1')";
   mysqli_query($con,$cpl);
   
   echo json_encode('Success');


}else{

   if(empty($_FILES['files']['name'][0])){

      $a='';
   }else{


   $filename = $_FILES['files']['name'][0];


   $upload_location = "upload/";
   // Get extension
   $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

   // Valid image extension
   $valid_ext = array("png","jpeg","jpg");

   // Check extension
   if(in_array($ext, $valid_ext)){

      // File path
      $path = $upload_location.$filename;

      // Upload file
    move_uploaded_file($_FILES['files']['tmp_name'][0],$path);
     
   }

 $a=" `vpimage`='$path', ";
   }


   $cpl="UPDATE `venderproduct` SET`vpname`='$proname',`vpprice`='$priprice',`discription`='$discription', $a  `minqty`='$minqty' WHERE vpid='$pid'";
   mysqli_query($con,$cpl);
   
  




}

echo ('fghjjjjjjjj');
}