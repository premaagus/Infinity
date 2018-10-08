<script src="js/alert.js"></script>

<?php 
	$id_jadwal = $_GET['id'];

	$queryDelete = $koneksi->query("DELETE FROM tb_jadwal WHERE id_jadwal = $id_jadwal");

	if ($queryDelete) {
		?>
		<script>
			successAlert("Sukses", "Delete jadwal berhasil");
			document.addEventListener('click', function(){
				location.href = 'index.php?menu=jadwal';
			});
		</script>
		<?php
	}
	else{
		?>
		<script>
			errorAlert("Gagal", "Delete jadwal gagal");
			document.addEventListener('click', function(){
				location.href = 'index.php?menu=jadwal';
			});
		</script>
		<?php
	}
 ?>