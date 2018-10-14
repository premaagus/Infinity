<?php 
	require_once '../lib/config.php';
	$date = date('Y-m-d H:i');
	$id_tugas = [];

	$queryTugas = $koneksi->query("SELECT * FROM tb_tugas");
	while ($dataTugas = $queryTugas->fetch_assoc()) {
		array_push($id_tugas, $dataTugas['id_tugas']);
	}

	foreach ($id_tugas as $key) {
		$queryCheck = $koneksi->query("SELECT * FROM tb_tugas WHERE id_tugas = $key");
		$dataCheck = $queryCheck->fetch_assoc();
		if ($dataCheck['tugas_selesai'] < $date) {
			$queryUpdate = $koneksi->query("UPDATE tb_tugas SET status = 'blocked' WHERE id_tugas = $key");
		}
		else{
			$queryUpdate = $koneksi->query("UPDATE tb_tugas SET status = 'ready' WHERE id_tugas = $key");
		}
	}


	
 ?>