<?php

class ModelEdit{
	function update($conn,$id,$userid,$password,$user_update,$dateUpdate){
		$query = "UPDATE t_user set f_user_ID = '".$userid."' ,
		 f_password = '".$password."', 
		 f_user_update = '".$user_update."', 
		 f_date_update = '".$dateUpdate."' where f_id = '".$id."' ";
		$update = mysqli_query($conn , $query);
		return $update;
	}
}
 ?>