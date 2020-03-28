<?php 

class ModelTampildata{
	function tampildata(){
	include"../Configs/Connection.php";
	$query = "SELECT * from t_user where f_isDelete = '0' ";
	$data = mysqli_query($conn,$query);	
	$hasil = mysqli_fetch_array($data);
	return $data ;
	}
}
	
	?>