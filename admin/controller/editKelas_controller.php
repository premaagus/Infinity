<?php 
	require_once '../../lib/config.php';

	$id_kelas	= $_POST['id_kelas'];
	$nama_kelas = $_POST['nama_kelas'];
	$ruangan 	= $_POST['ruangan'];
	$background_kelas = $_POST['background_kelas'];

	$queryEdit = $koneksi->query("UPDATE tb_kelas SET  nama_kelas='$nama_kelas', ruangan='$ruangan', background_kelas='$background_kelas' WHERE id_kelas = $id_kelas ");

	if ($queryEdit) {
		echo "sukses";
	}
	else{
		echo "gagal";
	}
 ?>