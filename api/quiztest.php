<?php
include "db.php";

if(isset($_POST['id'])){
    $id =$_POST['id'];
    $subj =   $_POST['subject'];
   


$query = "SELECT * FROM `question`  where id='$id' AND `subject`='$subj'";
$queryfire = mysqli_query($con, $query);
$num = mysqli_num_rows($queryfire);
$data=array();

if ($num > 0) {
    while ($row = mysqli_fetch_assoc($queryfire)) {

        $data['question']=$row['question'];
        $data['image']=$row['image'];
        $data['status']=$row['status'];
        $data['subject']=$row['subject'];
        $data['ansimage']=$row['ansimage'];
        $data['check']=1;
    };
    
   
}else{

    $data['check']=0;
}  
echo json_encode($data);
}
 
 
 ?>