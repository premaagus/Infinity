<?php 
	require_once '../../lib/config.php';

	$nama_kelas = $_POST['nama_kelas'];
	$ruangan 	= $_POST['ruangan'];
	$background_kelas = $_POST['background_kelas'];

	$queryAdd = $koneksi->query("INSERT INTO tb_kelas VALUES(NULL, '$nama_kelas', '$ruangan', '$background_kelas') ");

	if ($queryAdd) {
		echo "sukses";
	}
	else{
		echo "gagal";
	}
 ?>