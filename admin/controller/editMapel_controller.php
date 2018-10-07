<?php 
	require_once '../../lib/config.php';
	$id_mapel 			= $_POST['id_mapel'];
	$nama_mapel 		= $_POST['nama_mapel'];
	$jumlah_jam 		= $_POST['jumlah_jam'];
	$background_mapel 	= $_POST['background_mapel'];

	$queryUpdate = $koneksi->query("UPDATE tb_mapel SET nama_mapel='$nama_mapel', jumlah_jam=$jumlah_jam, background_mapel='$background_mapel' WHERE id_mapel = $id_mapel");

	if ($queryUpdate) {
		echo "success";
	}
	else{
		echo "error";
	}
 ?>