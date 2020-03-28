<?php 
include"Connection.php";
$id = $_POST['id'];
$userid = $_POST['userid'];
$password = $_POST['password'];
$user_update = "SYSTEM";
$dateUpdate = date('Y-m-d H:i:s');
$query = "UPDATE t_user set f_user_ID = '".$userid."' ,
 f_password = '".$password."', 
 f_user_update = '".$user_update."', 
 f_date_update = '".$dateUpdate."' where f_id = '".$id."' ";
$update = mysqli_query($conn , $query);
if($update == true){
	header("location: index.php");
	echo "Berhasil Update Data User <br> <a href='index.php'> 
	Go to index</a>";
} else {
	echo mysqli_error($conn);
	echo "Gagal Update Data User <br> <a 
	href='EditDataUser.php'> 
	Go to Create</a>";
}
?>