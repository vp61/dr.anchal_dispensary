<?php

include "db.php"; 
if(isset($_COOKIE['users234'])){

    $_SESSION['users234']=  $_COOKIE['users234'];
    $_SESSION['usersname']=  $_COOKIE['usersname'];

   echo '<script> window.location.href = "dashboard.php"; </script>';
 }else{

    echo '<script> window.location.href = "login.php"; </script>';
 }






?>