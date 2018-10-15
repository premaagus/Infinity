<?php 

	if (!isset($_GET['menu']) || $_GET['menu'] == 'index') {
		require_once 'partials/dashboard.php';
	}

	// jadwal
	//materi
	else if (isset($_GET['menu']) && isset($_GET['id_mapel']) && isset($_GET['id_kelas']) && $_GET['view'] == 'materi' && !isset($_GET['action'])) {
		require_once 'partials/viewMateri.php';
	}
	else if (isset($_GET['menu']) && isset($_GET['id_mapel']) && isset($_GET['id_kelas']) && $_GET['view'] == 'materi' && $_GET['action'] == 'add') {
		require_once 'partials/addMateri.php';
	}

	//Tugas
	else if (isset($_GET['menu']) && isset($_GET['id_mapel']) && isset($_GET['id_kelas']) && $_GET['view'] == 'tugas' && !isset($_GET['action'])) {
		require_once 'partials/viewTugas.php';
	}
	else if (isset($_GET['menu']) && isset($_GET['id_mapel']) && isset($_GET['id_kelas']) && $_GET['view'] == 'tugas' && $_GET['action'] == 'add') {
		require_once 'partials/addTugas.php';
	}

	else if (isset($_GET['menu']) && isset($_GET['id_jadwal'])) {
		require_once 'partials/detailJadwal.php';
	}
	else if ($_GET['menu'] == "jadwal" && isset($_GET['id_mapel'])) {
		require_once 'partials/detailJadwal.php';
	}
	else if ($_GET['menu'] == "jadwal" && !isset($_GET['action'])) {
		require_once 'partials/viewJadwal.php';
	}


	//Materi
	else if ($_GET['menu'] == "jadwal" && $_GET['action'] == 'edit' && isset($_GET['id_materi'])) {
		require_once 'partials/editMateri.php';
	}
	else if ($_GET['menu'] == "jadwal" && $_GET['action'] == 'delete' && isset($_GET['id_materi'])) {
		require_once 'partials/deleteMateri.php';
	}
	else if ($_GET['menu'] == "jadwal" && $_GET['action'] == 'download' && isset($_GET['id_materi'])) {
		require_once 'partials/downloadMateri.php';
	}
	//Tugas
	else if ($_GET['menu'] == "jadwal" && $_GET['action'] == 'edit' && isset($_GET['id_tugas'])) {
		require_once 'partials/editTugas.php';
	}
	else if ($_GET['menu'] == "jadwal" && $_GET['action'] == 'delete' && isset($_GET['id_tugas'])) {
		require_once 'partials/deleteTugas.php';
	}
	else if ($_GET['menu'] == "jadwal" && $_GET['action'] == 'download' && isset($_GET['id_tugas'])) {
		require_once 'partials/downloadTugas.php';
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

	//Pengumuman
	else if (isset($_GET['menu']) && isset($_GET['id_mapel']) && isset($_GET['id_kelas']) && $_GET['view'] == 'pengumuman' && !isset($_GET['action'])) {
		require_once 'partials/viewPengumuman.php';
	}
 ?>