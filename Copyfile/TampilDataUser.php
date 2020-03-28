<?php
include"Connection.php";
if ($conn == TRUE) {
	$query = "SELECT * from t_user where f_isDelete = '0' ";
	$data = mysqli_query($conn,$query);	
	$hasil = mysqli_fetch_array($data);
	
	//var_dump($hasil);
} else {
	echo "gagal";
}
?>