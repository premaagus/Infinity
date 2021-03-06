<?php 

	if (!isset($_GET['menu'])) {
		?>
		<script>
			location.href = 'index.php?menu=index';
		</script>
		<?php
	}
	else if ($_GET['menu'] == 'index') {
		require_once 'partials/dashboard.php';
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
	else if ($_GET['menu'] == 'guru' && $_GET['action'] == 'edit' && isset($_GET['id_user'])) {
		require_once 'partials/editGuru.php';
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
	else if ($_GET['menu'] == 'mapel' && $_GET['action'] == 'edit' && isset($_GET['id'])) {
		require_once 'partials/editMapel.php';
	}
	else if ($_GET['menu'] == "mapel" && isset($_GET['id']) && $_GET['view'] == 'materi') {
		require_once 'partials/viewMateri.php';
	}
	else if ($_GET['menu'] == "mapel" && isset($_GET['id']) && $_GET['view'] == 'tugas') {
		require_once 'partials/viewTugas.php';
	}
	else if ($_GET['menu'] == 'mapel' && $_GET['action'] == 'add') {
		require_once 'partials/addMapel.php';
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
	else if ($_GET['menu'] == 'kelas' && $_GET['action'] == 'edit' && isset($_GET['id_kelas'])) {
		require_once 'partials/editKelas.php';
	}
	else if ($_GET['menu'] == 'kelas' && $_GET['action'] == 'delete' && isset($_GET['id_kelas'])) {
		require_once 'partials/deleteKelas.php';
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

	//edit Profile
	else if($_GET['menu'] == 'edit' && !isset($_GET['id_user'])){
		require_once 'partials/editMenu.php';
	}
	else if($_GET['menu'] == 'editProfile' && isset($_GET['id_user'])){
		require_once 'partials/editProfile.php';
	}
	else if($_GET['menu'] == 'editPassword' && isset($_GET['id_user'])){
		require_once 'partials/editPassword.php';
	}

 ?>