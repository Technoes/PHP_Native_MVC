<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="tampilan.css">

</head>
<body>
<div class="wrap1"> 
	<nav class="menu">
		<ul>
			<li>
				<a href="index.php?method=Viewtable">Home</a>
			</li>
			<li>
				<a href="index.php?method=CreateDataUser">Create</a>
			</li>	
		</ul>
	</nav>
			
	<aside class="sidebar">
		<div class="widget">
			<h2>Tutorial</h2>
			<p>Selamat datang di Kelas Belajar PHP Bersama Dwiyan </p>
		</div>
		
	</aside>
			
	<!-- bagian konten Blog -->
	<div class="blog">

		<div class="widget12" id="test2">
			<?php $var = ""; if(empty($_GET['method'])){ 
			$var = "Viewtable";} 
			else {$var = $_GET['method'];} 
			include "".$var.".php"; ?>
		</div>
	</div>
	<!-- akhir bagian konten Blog -->
</div>
</body>
</html>