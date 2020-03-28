<?php 
include"../Configs/Connection.php";
if(isset($_POST['simpan'])){
	$id = $_POST['id'];
	$userid = $_POST['userid'];
	$password = $_POST['password'];
	$update = update($conn,$id,$userid,$password);	
	if($update == true){
		header("location: ../Views/index.php");
		echo "Berhasil Update Data User <br> <a href='index.php'> 
		Go to index</a>";
	} else {
		echo mysqli_error($conn);
		echo "Gagal Update Data User <br> <a 
		href='EditDataUser.php'> 
		Go to Create</a>";
	}
} else {
	header("location: ../Views/index.php");
}
function update($conn,$id,$userid,$password){
	$user_update = "SYSTEM";
	$dateUpdate = date('Y-m-d H:i:s');
	include"../Models/modeledit.php";	
	$process = new ModelEdit();
	return $process->update($conn,$id,$userid,$password,$user_update,$dateUpdate);
}
?>