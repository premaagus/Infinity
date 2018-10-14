<script src="js/alert.js"></script>

<?php 
	$id_tugas 		= $_GET['id_tugas'];
	$queryTugas 	= $koneksi->query("SELECT * FROM tb_tugas WHERE id_tugas = $id_tugas");
	$dataTugas		= $queryTugas->fetch_assoc();
	$file_tugas		= $dataTugas['file_tugas'];

	$id_mapel		= $dataTugas['id_mapel'];
	$id_kelas		= $dataTugas['id_kelas'];

	$queryOwn		= $koneksi->query("SELECT * FROM tb_jadwal WHERE id_kelas = $id_kelas AND id_mapel = $id_mapel");
	$dataOwn		= $queryOwn->fetch_assoc();
	$directory		= '../files/tugas/guru/';

	if ($dataOwn['id_guru'] != $_SESSION['user']['id_guru']) {
		?>
		<script>
			errorAlert("Error", "Akses ditolak!");
			document.addEventListener('click', function(){
				location.href = 'index.php?menu=index';
			});
		</script>
		<?php
		die();
	}

	if (file_exists($directory.$file_tugas)) {
		unlink($directory.$file_tugas);
	}
	$queryDelete = $koneksi->query("DELETE FROM tb_tugas WHERE id_tugas = $id_tugas");

	if ($queryDelete) {
		?>
		<script>
			successAlert("Sukses", "Data berhasil dihapus");
			document.addEventListener('click', function(){
				location.href = "index.php?menu=jadwal&id_mapel=<?php echo $id_mapel ?>&id_kelas=<?php echo $id_kelas ?>&view=tugas";
			});
		</script>
		<?php
	}
	else{
		?>
		<script>
			errorAlert("Error", "Data gagal dihapus");
			document.addEventListener('click', function(){
				location.href = "index.php?menu=jadwal&id_mapel=<?php echo $id_mapel ?>&id_kelas=<?php echo $id_kelas ?>&view=tugas";
			});
		</script>
		<?php
	}
 ?>