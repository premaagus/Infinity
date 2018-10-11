<?php 

	if (!isset($_GET['menu']) || $_GET['menu'] == 'index') {
		require_once 'partials/dashboard.php';
	}

	// jadwal
	else if ($_GET['menu'] == 'jadwal' && isset($_GET['id_mapel']) && isset($_GET['id_kelas']) && $_GET['view'] == 'materi' && !isset($_GET['action'])) {
		require_once 'partials/viewMateri.php';
	}
	else if ($_GET['menu'] == 'jadwal' && isset($_GET['id_mapel']) && isset($_GET['id_kelas']) && $_GET['view'] == 'materi' && $_GET['action'] == 'add') {
		require_once 'partials/addMateri.php';
	}
	else if ($_GET['menu'] == "jadwal" && isset($_GET['id_jadwal'])) {
		require_once 'partials/detailJadwal.php';
	}
	else if ($_GET['menu'] == "jadwal" && isset($_GET['id_mapel'])) {
		require_once 'partials/detailJadwal.php';
	}
	else if ($_GET['menu'] == "jadwal" && !isset($_GET['action'])) {
		require_once 'partials/viewJadwal.php';
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