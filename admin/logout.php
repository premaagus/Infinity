<?php 
	session_start();
	session_destroy();
 ?>

 <link rel="stylesheet" type="text/css" href="../css/alert.css">
<!-- Alert -->
	<div id="opacity"></div>

	<div id="success-msg">
		<div class="icon-success">
			<img src="../img/green-check.gif">
		</div>
		<h1 id="capt-s-alert"></h1>
		<p id="desc-s-alert"></p>
		<div class="btn-s-alert">
			Oke
		</div>
	</div>
	<div id="error-msg">
		<div class="icon-error">
			<img src="../img/error.gif">
		</div>
		<h1 id="capt-e-alert"></h1>
		<p id="desc-e-alert"></p>
		<div class="btn-e-alert">
			Oke
		</div>
	</div>
<!-- Alert -->

 <script type="text/javascript" src="../js/alert.js"></script>
 <script type="text/javascript">
 	successAlert("Berhasil", "Sampai Jumpa");
 	document.addEventListener('click', function(){
 		location.href = '../index.php';
 	});
 </script>