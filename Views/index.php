<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../tampilan.css">
<!-- library jQuery https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<div class="wrap1"> 
	<nav class="menu">
		<ul>
			<li>
				<a href="index.php?method=Viewtable" onClick="testclick();" >Home</a>
			</li>
			<li>
				<a href="index.php?method=CreateDataUser">Create</a>
			</li>	
		</ul>
	</nav>
			
	<aside class="sidebar">
		<div class="widget">
			<h2>Tutorial</h2>
			<p id = "p1">Selamat datang di Kelas Belajar PHP Bersama Dwiyan </p>
		</div>
	</aside>
			
	<!-- bagian konten Blog -->
	<div class="blog">

		
		<div class="widget12" id="test2">
			<?php $var = ""; if(empty($_GET['method'])){ 
			$var = "Viewtable";} 
			else {$var = $_GET['method'];} 
			include "../Views/".$var.".php"; ?>
		</div>
	</div>
	<!-- akhir bagian konten Blog -->
</div>
</body>
<script type="text/javascript">
	// read document ready 
	$(function(){
		// variable || getElement 
		var element = document.getElementById("p1");
		// set Attribute
		element.setAttribute('style', 'color:red;');
		//var element2 = document.getElementsByClassName("testclass")[0];
		//alert(element2);
		//alert("test alert");
	});
	// onClick
	function testclick(){
		// pop up
		alert("Tets Click Event");
	}
	// event function onClick
	function submitCreated(element){
		// event submit
		document.getElementsByName(element)[0].submit();
	}
	// event function onsubmit
	function submitHapus(){
		// event confirm to submit
		return confirm('Do you really want to Delete ?');
	}
	
</script>
</html>