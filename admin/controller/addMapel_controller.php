<?php 
	require_once '../../lib/config.php';
	$nama_mapel = $_POST['nama_mapel'];
	$jumlah_jam = $_POST['jumlah_jam'];
	$background_mapel = $_POST['background_mapel'];

	$queryInsert = $koneksi->query("INSERT INTO tb_mapel VALUES (NULL, '$nama_mapel', $jumlah_jam, '$background_mapel')");

	if ($queryInsert) {
		echo "success";
	}
	else{
		echo "error";
	}
 ?>