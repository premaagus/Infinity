<?php 

	require_once '../../lib/config.php';

	$id_jadwal		= $_POST['id_jadwal'];
	$id_mapel 		= $_POST['id_mapel'];
	$id_guru 		= $_POST['id_guru'];
	$hari 			= $_POST['hari'];
	$jam_mulai 		= $_POST['jam_mulai'];
	$jam_selesai 	= $_POST['jam_selesai'];
	$id_kelas 		= $_POST['id_kelas'];
	$tahun_ajaran 	= $_POST['tahun_ajaran'];

	$queryEdit = $koneksi->query("UPDATE tb_jadwal SET  id_mapel=$id_mapel, id_guru=$id_guru, hari='$hari', jam_mulai='$jam_mulai', jam_selesai='$jam_selesai', id_kelas=$id_kelas, tahun_ajaran=$tahun_ajaran WHERE id_jadwal = $id_jadwal ");

	if ($queryEdit) {
		echo "success";
	}
	else{
		echo "error";
	}

 ?>