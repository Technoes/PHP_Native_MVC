<?php 

class ModelHapus{
	
	function hapus($conn,$id,$user_update,$dateUpdate){
		$query = "UPDATE t_user set f_isActive = '1' ,
		 f_isDelete = '1', 
		 f_user_update = '".$user_update."', 
		 f_date_update = '".$dateUpdate."' where f_id = '".$id."' ";
		$update = mysqli_query($conn , $query);
		return $update;
	}
}


?>