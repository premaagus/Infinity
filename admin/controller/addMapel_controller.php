<?php 
	require_once '../../lib/config.php';
	$nama_mapel = $_POST['nama_mapel'];
	$id_guru = $_POST['id_guru'];
	$background_mapel = $_POST['background_mapel'];

	$queryInsert = $koneksi->query("INSERT INTO tb_mapel VALUES (NULL, '$nama_mapel', $id_guru, '$background_mapel')");

	if ($queryInsert) {
		echo "success";
	}
	else{
		echo "$nama_mapel, $id_guru, $background_mapel";
	}
 ?>