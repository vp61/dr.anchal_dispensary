<?php
include "db.php";
if (isset($_POST['question'])) {
    
        $subject = $_POST['subject'];
        $answer = $_POST['answer'];
        $qno = $_POST['qno'];
        $question = $_POST['question'];
        $correct = $_POST['correct'];
        

        if($qno!=""){
  
          $dep=mysqli_query($con,"SELECT ifnull(max(id),0) as id FROM `question` where `subject`='$subject'");
        $ro=mysqli_fetch_array($dep);
        $id=$ro['id']+1;
       
      
        $sql = "insert into question (id ,question,subject, `image`, `status`) value ('$id','$question','$subject','1','1')";
        $res = mysqli_query($con, $sql);
    }else{

      $dep=mysqli_query($con,"SELECT ifnull(max(id),0) as id FROM `question` where `subject`='$subject'");
        $ro=mysqli_fetch_array($dep);
        $id=$ro['id'];
    

if($correct==1){
  $correct_option=1;
}else{
  $correct_option=0;
}

      
      
              $sql1 = "insert into answer (id,answer,correct,subject) value('$id','$answer','$correct_option','$subject')";
      
              $res1 = mysqli_query($con, $sql1);
        
            








    }
    echo json_encode(1);

            }
         
      
    
    



        ?>