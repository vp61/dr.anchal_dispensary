<?php
include 'db.php';
if(isset($_POST['usid'])){
   
    $usid=mysqli_real_escape_string($con, $_POST['usid']);
    $menuts=mysqli_real_escape_string($con, $_POST['minute']);
    $hour=mysqli_real_escape_string($con, $_POST['hour']);
    $day=mysqli_real_escape_string($con, $_POST['day']);
    $month=mysqli_real_escape_string($con, $_POST['month']);
    $year=mysqli_real_escape_string($con, $_POST['year']);
    $update=mysqli_real_escape_string($con, $_POST['update']);
    $dep=mysqli_query($con,"SELECT ifnull(max(id),0) as id FROM `alarm`");
    $ro=mysqli_fetch_array($dep);
    $id=$ro['id']+1;

 if($update==0){
    
        $sql="INSERT INTO `alarm`( `usid`, `menuts`, `hour`, `day`, `month`, `year`, `status`) 
        VALUES ('$usid','$menuts','$hour','$day','$month','$year','1')";
    
    mysqli_query($con,$sql);

echo json_encode($id);
}else{
$sql="UPDATE `alarm` SET `menuts`='$menuts',`hour`='$hour',`day`='$day',`month`='$month',`year`='$year',`status`='1' WHERE usid='$usid' and id='$update'";
mysqli_query($con,$sql);

echo json_encode($update);
}
    
    
    }
    
    


    if(isset($_POST['cencel'])){
  
        $cencel=$_POST['cencel'];
    
        $uid=$_POST['uid'];
        $sql1="SELECT * from alarm  where usid='$uid' and id='$cencel'";
$am=   mysqli_query($con,$sql1);

$row= mysqli_fetch_assoc($am);

if($row['status']==1){
    $al=2;
}else{
    $al=1;  
}

       
    
       
    $sql="UPDATE `alarm` SET `status`='$al' WHERE  usid='$uid' and id='$cencel' ";
    $am=   mysqli_query($con,$sql);
    
   
    
    echo json_encode(1);
    }







if(isset($_POST['showdata'])){
  
    $show=$_POST['showdata'];

 
   

    $data=array();
$sql1="SELECT * from alarm  where usid='$show' ";
$am=   mysqli_query($con,$sql1);

while($row= mysqli_fetch_assoc($am)){
$data[]=$row;

};

echo json_encode($data);
}