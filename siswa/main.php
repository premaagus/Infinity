<?php 

	if (!isset($_GET['menu'])) {
		header('location: index.php?menu=index');
	}
	else if ($_GET['menu'] == 'index') {
		require_once 'partials/dashboard.php';
	}

	//all tugas
	else if ($_GET['menu'] == 'tugas' && !isset($_GET['view']) && !isset($_GET['action'])) {
		require_once 'partials/viewAllTugas.php';
	}

	//all pengumuman
	else if ($_GET['menu'] == 'pengumuman' && !isset($_GET['view']) && !isset($_GET['action'])) {
		require_once 'partials/viewAllPengumuman.php';
	}
	
	//jadwal
	else if ($_GET['menu'] == 'jadwal' && !isset($_GET['id_jadwal']) && !isset($_GET['view'])) {
		require_once 'partials/viewJadwal.php';
	}
	else if ($_GET['menu'] == 'jadwal' && isset($_GET['id_jadwal']) && !isset($_GET['view'])) {
		require_once 'partials/detailJadwal.php';
	}

	//materi
	else if (isset($_GET['menu']) && $_GET['view'] == 'materi' && isset($_GET['id_mapel']) && isset($_GET['id_kelas']) && !isset($_GET['action'])) {
		require_once 'partials/viewMateri.php';
	}
	else if (isset($_GET['menu']) && $_GET['view'] == 'materi' && isset($_GET['id_materi']) && $_GET['action'] == 'download') {
		require_once 'partials/downloadFileMateri.php';
	}

	//tugas
	else if (isset($_GET['menu']) && $_GET['view'] == 'tugas' && isset($_GET['id_mapel']) && isset($_GET['id_kelas']) && !isset($_GET['action'])) {
		require_once 'partials/viewTugas.php';
	}
	else if (isset($_GET['menu']) && $_GET['view'] == 'tugas' && isset($_GET['id_tugas']) && $_GET['action'] == 'download') {
		require_once 'partials/downloadTugas.php';
	}
	else if (isset($_GET['menu']) && $_GET['view'] == 'tugas' && isset($_GET['id_tugas']) && $_GET['action'] == 'upload') {
		require_once 'partials/uploadTugas.php';
	}

 ?>