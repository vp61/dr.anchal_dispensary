<?php
include "db.php";

if(isset($_POST['coursename'])){
$coursename= mysqli_real_escape_string($con,$_POST['coursename']);
$discription= mysqli_real_escape_string($con,$_POST['discription']);
$courseprice= mysqli_real_escape_string($con,$_POST['courseprice']);

$uid= mysqli_real_escape_string($con,$_POST['uid']);
$image = $_FILES['video']['name'];
$imagePath = 'thumbnail/'.$image;
$tmp_name = $_FILES['video']['tmp_name'];
move_uploaded_file($tmp_name, $imagePath);
$date=date('Y-m-d');

if($uid==0){



$eem="INSERT INTO `qcategory`(`cname`, `discription`, `image`, `cprice`, `status`)
VALUES ('$coursename','$discription','$imagePath','$courseprice','1')";
 mysqli_query($con,$eem);
 echo json_encode(1);
}else{
$ast="UPDATE `qcategory` SET `cname`='$coursename',`discription`='$discription',`cprice`='$courseprice'  WHERE id='$uid'";
mysqli_query($con,$ast);
echo json_encode(1);
}
 


}



if(isset($_POST['showdata'])){

    $search=$_POST['showdata'];
    if($search==""){
        $qry="";
    }else{
        $qry=" where  cname LIKE %$search% or discription LIKE %$search% ";  
    }

    $data=array();
$sql1="SELECT * from qcategory $qry ";
$am=   mysqli_query($con,$sql1);

while($row= mysqli_fetch_assoc($am)){
$data[]=$row;

};

echo json_encode($data);
}








?>














