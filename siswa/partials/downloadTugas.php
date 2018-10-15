<?php 
	$id_tugas = $_GET['id_tugas'];
	$queryTugas = $koneksi->query("SELECT * FROM tb_tugas WHERE id_tugas = $id_tugas");
	$dataTugas = $queryTugas->fetch_assoc();
	$nama_file = $dataTugas['file_tugas'];
	$extensi_file = $dataTugas['extensi_file'];
	$directory = '../files/tugas/guru/';
	$file_url = $directory.$nama_file;
	$dateExp = $dataTugas['tugas_selesai'];
	$dateNow = date('Y-m-d H:i:s');


	if ($dateExp < $dateNow) {
		echo "File Telah Kadaluarsa";
	}
	else{
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
	}
 ?>