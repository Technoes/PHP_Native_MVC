<?php 

class ModelCreate{
	function create_process($conn,$userID,$password,$date_create,$user_create,$date_update,$user_update,
	$status,$delete){
	$query = "INSERT INTO t_user (f_user_ID,f_password,f_isActive,
	f_isDelete,f_user_create,f_date_create,f_user_update,
	f_date_update) VALUES ('".$userID."','".$password."',
	'".$status."','".$delete."','".$user_create."',
	'".$date_create."','".$user_update."','".$date_update."')";
		 if(mysqli_query($conn,$query)){
			 header("location: ../Views/index.php");
			echo "Berhasil Input Data User <br> <a href='index.php'> 
			Go to index</a>";
		} else {
			echo mysqli_error($conn);
			echo "Gagal Input Data User <br> <a 
			href='CreateDataUser.php'> 
			Go to Create</a>";
		}	
	}
}
 

?>