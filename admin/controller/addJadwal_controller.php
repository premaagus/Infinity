<?php 
	require_once '../../lib/config.php';

	$id_mapel 		= $_POST['id_mapel'];
	$id_guru 		= $_POST['id_guru'];
	$hari 			= $_POST['hari'];
	$jam_mulai 		= $_POST['jam_mulai'];
	$jam_selesai 	= $_POST['jam_selesai'];
	$id_kelas 		= $_POST['id_kelas'];
	$tahun_ajaran 	= $_POST['tahun_ajaran'];

	if ($jam_selesai < $jam_mulai) {
		echo "jam";
	}
	else{
		$queryCheck = $koneksi->query("SELECT * FROM tb_jadwal WHERE jam_mulai > '$jam_mulai' AND hari = '$hari' AND id_kelas = '$id_kelas'");
		if ($queryCheck->num_rows > 0) {
			echo "bentrok";
		}
		else{
			$queryAdd = $koneksi->query("INSERT INTO tb_jadwal VALUES (NULL, $id_mapel, $id_guru, '$hari', '$jam_mulai', '$jam_selesai', $id_kelas, $tahun_ajaran) ");

			if ($queryAdd) {
				echo "success";
			}
			else{
				echo "error";
			}
		}
	}

 
 ?>
