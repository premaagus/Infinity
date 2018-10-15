<?php 

	if (!isset($_GET['menu']) || $_GET['menu'] == 'index') {
		require_once 'partials/dashboard.php';
	}

	//All Siswa 
	else if($_GET['menu'] == 'showAllSiswa'){
		require_once 'partials/showAllSiswa.php';
	}

	//Profil Siswa
	else if($_GET['menu'] == 'profileSiswa' && isset($_GET['id_siswa'])){
		require_once 'partials/profileSiswa.php';
	}

	//All Guru
	else if($_GET['menu'] == 'showAllGuru'){
		require_once 'partials/showAllGuru.php';
	}

	//Profile Guru
	else if($_GET['menu'] == 'profileGuru' && isset($_GET['id_guru'])){
		require_once 'partials/profileGuru.php';
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

	else if (isset($_GET['menu']) && isset($_GET['id_jadwal']) && !isset($_GET['view'])) {
		require_once 'partials/detailJadwal.php';
	}
	else if ($_GET['menu'] == "jadwal" && isset($_GET['id_mapel']) && !isset($_GET['view'])) {
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


	//all tugas
	else if ($_GET['menu'] == 'tugas' && !isset($_GET['action'])) {
		require_once 'partials/viewAllTugas.php';
	}

	//all pengumuman
	else if ($_GET['menu'] == 'pengumuman' && !isset($_GET['action'])) {
		require_once 'partials/viewAllPengumuman.php';
	}

	//Pengumuman
	else if (isset($_GET['menu']) && isset($_GET['id_mapel']) && isset($_GET['id_kelas']) && $_GET['view'] == 'pengumuman' && !isset($_GET['action'])) {
		require_once 'partials/viewPengumuman.php';
	}
	else if (isset($_GET['menu']) && $_GET['action'] == 'add' && $_GET['view'] == 'pengumuman' && isset($_GET['id_mapel']) && isset($_GET['id_kelas'])) {
		require_once 'partials/addPengumuman.php';
	}

 ?>