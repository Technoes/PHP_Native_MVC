<?php 
include"../Configs/Connection.php";
//$action = $_POST[];
//if(isset($_POST['simpan'])){
$userID = $_POST['userid'];
$password = $_POST['password'];
	
input($conn,$userID,$password);	
	
//}
function input($conn,$userID,$password){
	$date_create = date('Y-m-d H:i:s');
	$user_create = "SYSTEM";
	$date_update = date('Y-m-d H:i:s');
	$user_update = "SYSTEM";
	$status = 0;
	$delete = 0;
	include "../Models/modelcreate.php";	
	$process = new ModelCreate();
	
	return $process->create_process($conn,$userID,$password,$date_create,$user_create,$date_update,$user_update,
	$status,$delete);
}

?>