<?php 
	$id_materi = $_GET['id_materi'];
	$queryMateri = $koneksi->query("SELECT * FROM tb_materi WHERE id_materi = $id_materi");
	$dataMateri = $queryMateri->fetch_assoc();
	$nama_file = $dataMateri['file_materi'];
	$extensi_file = $dataMateri['extensi_file'];
	$directory = '../files/materi/';
	$file_url = $directory.$nama_file;

	if (file_exists($directory.$nama_file)) {
		if ($extensi_file == 'text/plain') {
			$file = file_get_contents($directory.$nama_file, FALSE, NULL);
		}
		else{
			header('Content-Description: File Stream');
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

		}
	}
 ?>