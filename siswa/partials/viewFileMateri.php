<?php 
	$id_materi = $_GET['id_materi'];
	$queryMateri = $koneksi->query("SELECT * FROM tb_materi WHERE id_materi = $id_materi");
	$dataMateri = $queryMateri->fetch_assoc();
	$nama_file = $dataMateri['file_materi'];
	$extensi_file = $dataMateri['extensi_file'];
	$directory = '../files/materi/';

	if (file_exists($directory.$nama_file)) {
		if ($extensi_file == 'text/plain') {
			$file = file_get_contents($directory.$nama_file, FALSE, NULL);
		}
		else{
			$file1 = 'test.pdf';
			header('Content-type: aplication/pdf');
			header('Content-Disposition: inline; filename="' .$file1. '"');
			header('Content-Transfer-Encoding: binary');
			header('Accept-Ranges: bytes');
			@readfile($file1);

		}
	}
 ?>

 <h1><?php echo $dataMateri['nama_materi'] ?></h1>
 <hr>
 <p><?php echo $file ?></p>