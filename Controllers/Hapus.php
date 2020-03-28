<?php 
include"../Configs/Connection.php";
if(isset($_POST['hapus'])){
$id = $_POST['id'];
$hapus = hapus($conn,$id);
	if($hapus == true){
		header("location: ../Views/index.php");
		echo "Berhasil Delete Data User <br> <a href='index.php'> 
		Go to index</a>";
	} else {
		echo mysqli_error($conn);
		echo "Gagal Delete Data User <br> <a 
		href='index.php'> 
		Go to Index</a>";
	}
}
function hapus($conn,$id){
	$user_update = "SYSTEM";
	$dateUpdate = date('Y-m-d H:i:s');	
		include"../Models/modelhapus.php";
		$process = new ModelHapus();
		$hapus = $process->hapus($conn,$id,$user_update,$dateUpdate);
		return $hapus;
		
}

?>