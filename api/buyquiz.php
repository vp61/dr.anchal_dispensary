<?php
include 'db.php';


if(isset($_POST['showdata'])){
  
    $show=$_POST['showdata'];

  
          
        $sql="SELECT courseid FROM `buycorce` WHERE studentid='$show' and confirm='3'  ";
        $am1=   mysqli_query($con,$sql);
        $data1=array();
        while($row1= mysqli_fetch_array($am1)){
        
        array_push($data1,$row1['courseid']);
        
        }
        
        
        
            $q=" and  id IN(".implode(',', $data1).")  ";   
 
        
        
        $data=array();
        $sql1="SELECT * from subjects  WHERE 1=1  $q ";
        
        $am=   mysqli_query($con,$sql1);
        
        while($row= mysqli_fetch_assoc($am)){
        $data[]=$row;
        
        };
        

echo json_encode($data);
}
