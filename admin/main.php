<?php 

	if (!isset($_GET['menu'])) {
		header('location: index.php?menu=index');
	}
	else if ($_GET['menu'] == 'index') {
		require_once 'partials/viewSiswa.php';
	}

	// Siswa
	else if ($_GET['menu'] == "siswa" && !isset($_GET['action'])) {
		require_once 'partials/viewSiswa.php';
	}
	else if ($_GET['menu'] == 'siswa' && $_GET['action'] == 'add'){
		require_once 'partials/addSiswa.php';
	}
	else if ($_GET['menu'] == 'siswa' && $_GET['action'] == 'delete' && isset($_GET['id_user'])) {
		require_once 'partials/deleteSiswa.php';
	}

	// Guru
	else if ($_GET['menu'] == "guru" && !isset($_GET['action'])) {
		require_once 'partials/viewGuru.php';
	}
	else if ($_GET['menu'] == 'guru' && $_GET['action'] == 'add') {
		require_once 'partials/addGuru.php';
	}
	else if ($_GET['menu'] == 'guru' && $_GET['action'] == 'delete' && isset($_GET['id_user'])) {
		require_once 'partials/deleteGuru.php';
	}

	// Mapel
	else if ($_GET['menu'] == "mapel" && !isset($_GET['action'])) {
		require_once 'partials/viewMapel.php';
	}
	else if ($_GET['menu'] == 'mapel' && $_GET['action'] == 'add') {
		require_once 'partials/addMapel.php';
	}
 ?>