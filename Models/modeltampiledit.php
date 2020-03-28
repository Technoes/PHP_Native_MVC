<?php 

include"../Configs/Connection.php";
$query = "SELECT * FROM t_user WHERE f_id = '".$id."'";
$getdata = mysqli_query($conn,$query);
$field = mysqli_fetch_row($getdata);


?>