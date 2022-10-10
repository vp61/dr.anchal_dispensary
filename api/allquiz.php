<?php
include "db.php";

if(isset($_POST['showdata'])){

    $search=$_POST['showdata'];
    if($search==""){
        $qry="";
    }else{
        $qry=" where  `subject` LIKE %$search% or description LIKE %$search% ";  
    }

    $data=array();
$sql1="SELECT * from `subjects` $qry ";
$am=   mysqli_query($con,$sql1);

while($row= mysqli_fetch_assoc($am)){
$data[]=$row;

};

echo json_encode($data);
}








?>