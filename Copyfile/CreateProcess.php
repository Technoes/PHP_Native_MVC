<?php 
include_once("Connection.php");
$userID = $_POST['userid'];
$password = $_POST['password'];
$date_create = date('Y-m-d H:i:s');
$user_create = "SYSTEM";
$date_update = date('Y-m-d H:i:s');
$user_update = "SYSTEM";
$status = 0;
$delete = 0;

$query = "INSERT INTO t_user (f_user_ID,f_password,f_isActive,
f_isDelete,f_user_create,f_date_create,f_user_update,
f_date_update) VALUES ('".$userID."','".$password."',
'".$status."','".$delete."','".$user_create."',
'".$date_create."','".$user_update."','".$date_update."')";

//$insert = mysqli_query($conn,$query);
//echo $conn;
 if(mysqli_query($conn,$query)){
	 header("location: index.php");
	echo "Berhasil Input Data User <br> <a href='index.php'> 
	Go to index</a>";
} else {
	echo mysqli_error($conn);
	echo "Gagal Input Data User <br> <a 
	href='CreateDataUser.php'> 
	Go to Create</a>";
} 


?>