<script src="js/alert.js"></script>

<?php 
	$id_materi 		= $_GET['id_materi'];
	$queryMateri 	= $koneksi->query("SELECT * FROM tb_materi WHERE id_materi = $id_materi");
	$dataMateri		= $queryMateri->fetch_assoc();

	$id_mapel		= $dataMateri['id_mapel'];
	$id_kelas		= $dataMateri['id_kelas'];

	$queryOwn		= $koneksi->query("SELECT * FROM tb_jadwal WHERE id_kelas = $id_kelas AND id_mapel = $id_mapel");
	$dataOwn		= $queryOwn->fetch_assoc();

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

	$queryDelete = $koneksi->query("DELETE FROM tb_materi WHERE id_materi = $id_materi");

	if ($queryDelete) {
		?>
		<script>
			successAlert("Sukses", "Data berhasil dihapus");
			document.addEventListener('click', function(){
				location.href = 'index.php?menu=index';
			});
		</script>
		<?php
	}
	else{
		?>
		<script>
			errorAlert("Error", "Data gagal dihapus");
			document.addEventListener('click', function(){
				location.href = 'index.php?menu=index';
			});
		</script>
		<?php
	}
 ?>