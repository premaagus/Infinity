<?php 

	if (!isset($_GET['menu'])) {
		require_once 'partials/viewSiswa.php';
	}
	else if ($_GET['menu'] == "siswa" && !isset($_GET['action'])) {
		require_once 'partials/viewSiswa.php';
	}
	else if ($_GET['menu'] == "guru" && !isset($_GET['action'])) {
		require_once 'partials/viewGuru.php';
	}
	else if ($_GET['menu'] == "pelajaran" && !isset($_GET['action'])) {
		require_once 'partials/viewPelajaran.php';
	}
	else if ($_GET['menu'] == 'siswa' && $_GET['action'] == 'add'){
		require_once 'partials/addSiswa.php';
	}
 ?>