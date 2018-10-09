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
	else if ($_GET['menu'] == 'siswa' && $_GET['action'] == 'edit' && isset($_GET['id_user'])) {
		require_once 'partials/editSiswa.php';
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
	else if ($_GET['menu'] == "mapel" && !isset($_GET['action']) && !isset($_GET['id'])) {
		require_once 'partials/viewMapel.php';
	}
	else if ($_GET['menu'] == "mapel" && isset($_GET['id']) && !isset($_GET['action']) && !isset($_GET['view'])) {
		require_once 'partials/detailMapel.php';
	}
	else if ($_GET['menu'] == "mapel" && isset($_GET['id']) && $_GET['view'] == 'materi') {
		require_once 'partials/viewMateri.php';
	}
	else if ($_GET['menu'] == "mapel" && isset($_GET['id']) && $_GET['view'] == 'materi') {
		require_once 'partials/viewTugas.php';
	}
	else if ($_GET['menu'] == 'mapel' && $_GET['action'] == 'add') {
		require_once 'partials/addMapel.php';
	}
	else if ($_GET['menu'] == 'mapel' && $_GET['action'] == 'edit' && isset($_GET['id'])) {
		require_once 'partials/editMapel.php';
	}
	else if ($_GET['menu'] == 'mapel' && $_GET['action'] == 'delete' && isset($_GET['id'])) {
		require_once 'partials/deleteMapel.php';
	}


	//kelas
	else if ($_GET['menu'] == "kelas" && !isset($_GET['action'])) {
		require_once 'partials/viewKelas.php';
	}
	else if ($_GET['menu'] == 'kelas' && $_GET['action'] == 'add') {
		require_once 'partials/addKelas.php';
	}

	//Jadwal
	else if ($_GET['menu'] == "jadwal" && !isset($_GET['action'])) {
		require_once 'partials/viewjadwal.php';
	}
	else if ($_GET['menu'] == 'jadwal' && $_GET['action'] == 'add') {
		require_once 'partials/addJadwal.php';
	}
	else if ($_GET['menu'] == 'jadwal' && $_GET['action'] == 'edit' && isset($_GET['id'])) {
		require_once 'partials/editJadwal.php';
	}
	else if ($_GET['menu'] == 'jadwal' && $_GET['action'] == 'delete' && isset($_GET['id'])) {
		require_once 'partials/deleteJadwal.php';
	}

 ?>