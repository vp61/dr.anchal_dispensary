<?php
include "db.php";

if(isset($_POST['id'])){
    $id =$_POST['id'];
    $subj =   $_POST['subject'];
   

    $query1 = "SELECT * FROM `answer` where id='$id' AND `subject`='$subj'";

   
    $queryfire1 = mysqli_query($con, $query1);
    
    $num1 = mysqli_num_rows($queryfire1);
    
      
    
    
    $data=array();
    if ($num1 > 0) {
        while ($row = mysqli_fetch_assoc($queryfire1)) {
    
    
            $data[]=$row;
        }
        
        echo json_encode($data);
     
    }

    } 