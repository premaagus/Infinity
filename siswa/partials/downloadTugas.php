
<script src="js/alert.js"></script>
<?php 
	$id_tugas = $_GET['id_tugas'];
	$queryTugas = $koneksi->query("SELECT * FROM tb_tugas WHERE id_tugas = $id_tugas");
	$dataTugas = $queryTugas->fetch_assoc();
	$id_mapel = $dataTugas['id_mapel'];
	$id_kelas = $dataTugas['id_kelas'];
	$nama_file = $dataTugas['file_tugas'];
	$extensi_file = $dataTugas['extensi_file'];
	$directory = '../files/tugas/guru/';
	$file_url = $directory.$nama_file;
	$dateExp = $dataTugas['tugas_selesai'];
	$dateNow = date('Y-m-d H:i:s');


	if ($dateExp < $dateNow) {
		?>
		<script>
			errorAlert("Error", "File Telah Kadaluarsa!");
			document.addEventListener('click', function(){
				location.href = "index.php?menu=jadwal&id_mapel=<?php echo $id_mapel ?>&id_kelas=<?php echo $id_kelas ?>&view=tugas"
			});
		</script>
		<?php
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