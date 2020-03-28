<?php 
	// 'localhost' server name 
	// 'root' username dari database
	// $conn ini adalah variable semua yang 
	// di awali dengan $ di sebut variabel
	// ' ini adalah kutip 1
	// " ini adalah kutip 2
	// ; ini adalah titik koma
	// / ini adalah slash
	// \ ini adalah back slash
	// <> ini adalah kurung panah 
	// [] ini adalah kurung siku
	// {} ini adalah kurung kurawal
	
	$databaseHost = 'localhost';
	$databaseName = 'belajar_web';
	$databaseUsername = 'root';
	$databasePassword = '';

	$conn = mysqli_connect('localhost','root','','belajar_web');
	/* if($conn = TRUE){
		echo "Connection Sucess";
	} else {
		die("Connection failed: " . mysqli_connect_error());
	} */ 

?>