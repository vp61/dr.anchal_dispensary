<?php
include "db.php";
if(isset($_POST['showproduct'])){




$result1 = "SELECT * FROM `venderproduct`" ;
$results1 = mysqli_query($con, $result1);
while ($row1 = mysqli_fetch_array($results1)) {



$data='
<tr>

<td>'.  $row1['vpname'].'</td>


<td>'.  $row1['vpprice'].'</td>


<td>'.  $row1['minqty'].'</td>


<td><img src="api/' .$row1['vpimage'].'" ></td>

<td><a onclick="update('. $row1['vpid'].')" class="font-12 btn-sm btn btn-success" >Edit</i> </a>  <a class="font-12 btn-sm btn btn-danger" onclick="delete1('. $row1['vpid'].')">Delete</a> </td>
										


</tr>




';





echo ($data);

}

}



?>
