<?php 
	$id_tugas = $_GET['id_tugas'];
	$queryTugas = $koneksi->query("SELECT * FROM tb_tugas WHERE id_tugas = $id_tugas");
	$dataTugas = $queryTugas->fetch_assoc();
	$nama_file = $dataTugas['file_tugas'];
	$extensi_file = $dataTugas['extensi_file'];
	$directory = '../files/tugas/guru/';
	$file_url = $directory.$nama_file;

	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.$nama_file.'"');
	header('Content-Transfer-Encoding: binary');
	header('Expires: 0');
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	header('Pragma: public');
	header('Content-Length: ' . filesize($file_url)); //Absolute URL
	ob_clean();
	flush();
	readfile($file_url); //Absolute URL
	exit();
 ?>