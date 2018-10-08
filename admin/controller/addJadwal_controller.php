<?php 

	require_once '../../lib/config.php';

	$id_mapel 		= $_POST['id_mapel'];
	$id_guru 		= $_POST['id_guru'];
	$hari 			= $_POST['hari'];
	$jam_mulai 		= $_POST['jam_mulai'];
	$jam_selesai 	= $_POST['jam_selesai'];
	$id_kelas 		= $_POST['id_kelas'];
	$tahun_ajaran 	= $_POST['tahun_ajaran'];

	$queryAdd = $koneksi->query("INSERT INTO tb_jadwal VALUES (NULL, $id_mapel, $id_guru, '$hari', '$jam_mulai', '$jam_selesai', $id_kelas, $tahun_ajaran) ");

	if ($queryAdd) {
		echo "success";
	}
	else{
		echo "error";
	}

 ?>