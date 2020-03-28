<?php 
include"Connection.php";
$id = $_POST['id'];
$user_update = "SYSTEM";
$dateUpdate = date('Y-m-d H:i:s');
$query = "UPDATE t_user set f_isActive = '1' ,
 f_isDelete = '1', 
 f_user_update = '".$user_update."', 
 f_date_update = '".$dateUpdate."' where f_id = '".$id."' ";
$update = mysqli_query($conn , $query);
if($update == true){
	header("location: index.php");
	echo "Berhasil Delete Data User <br> <a href='index.php'> 
	Go to index</a>";
} else {
	echo mysqli_error($conn);
	echo "Gagal Delete Data User <br> <a 
	href='index.php'> 
	Go to Index</a>";
}
?>