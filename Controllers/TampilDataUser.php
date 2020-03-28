<?php

class Tampildata{
	
	function tampil(){
		include"../Models/modeltampildata.php";
		$model = new ModelTampildata();
		$data = $model->tampildata();
		return $data ;
	}
}
?>