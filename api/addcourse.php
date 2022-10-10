<?php
include "db.php";

if(isset($_POST['coursename'])){
$coursename= mysqli_real_escape_string($con,$_POST['coursename']);
$discription= mysqli_real_escape_string($con,$_POST['discription']);
$courseprice= mysqli_real_escape_string($con,$_POST['courseprice']);
$videoid= mysqli_real_escape_string($con,$_POST['videoid']);
$uid= mysqli_real_escape_string($con,$_POST['uid']);
$image = $_FILES['video']['name'];
$imagePath = 'thumbnail/'.$image;
$tmp_name = $_FILES['video']['tmp_name'];
move_uploaded_file($tmp_name, $imagePath);
$date=date('Y-m-d');

if($uid==0){



$eem="INSERT INTO `corce`( `coursename`, `discription`, `status`, `prices`, `demovideoid`, `thumbnail`,`date1`)
 VALUES ('$coursename','$discription','1','$courseprice','$videoid','$imagePath','$date')";
 mysqli_query($con,$eem);
 echo json_encode(1);
}else{
$ast="UPDATE `corce` SET `coursename`='$coursename',`discription`='$discription' ,`prices`='$courseprice' , `demovideoid`='$videoid'  WHERE id='$uid'";
mysqli_query($con,$ast);
echo json_encode(1);
}
 


}



if(isset($_POST['showdata'])){

    $search=$_POST['showdata'];
    if($search==""){
        $qry="";
    }else{
        $qry=" where  coursename LIKE '%$search%' or discription LIKE '%$search%' ";  
    }

    $data=array();
$sql1="SELECT * from corce $qry ";
$am=   mysqli_query($con,$sql1);

while($row= mysqli_fetch_assoc($am)){
$data[]=$row;

};

echo json_encode($data);
}








?>